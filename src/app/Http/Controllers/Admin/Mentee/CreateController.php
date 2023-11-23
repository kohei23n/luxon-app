<?php

namespace App\Http\Controllers\Admin\Mentee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserDetail;

class CreateController extends Controller
{
  public function add()
  {
    $mentors = User::whereHas('mentorProfile')->get();

    return view('admin.mentee.add', compact('mentors'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $validatedData = $request->validate([
      'mus_email_address' => 'required|string|max:255',
      'mus_user_password' => 'required|string|max:255',
      'mus_user_last_name' => 'required|string|max:255',
      'mus_user_first_name' => 'required|string|max:255',
      'tud_current_university' => 'required|string|max:255',
      'tud_first_industry_preference' => 'required|string|max:255',
      'tud_second_industry_preference' => 'required|string|max:255',
      'tud_event_attendance_remaining' => 'required|integer',
      'tud_interview_count_remaining' => 'required|integer',
      'tud_case_study_count_remaining' => 'required|integer',
      'tud_es_count_remaining' => 'required|integer',
      'mus_dedicated_mentor_id' => 'required|integer',
    ]);

    try {
      DB::beginTransaction();

      // ユーザーデータの保存
      $musData = [
        'mus_email_address' => $validatedData['mus_email_address'],
        'mus_user_password' => Hash::make($validatedData['mus_user_password']),
        'mus_user_last_name' => $validatedData['mus_user_last_name'],
        'mus_user_first_name' => $validatedData['mus_user_first_name'],
        'mus_dedicated_mentor_id' => $validatedData['mus_dedicated_mentor_id']
      ];
      $user = User::create($musData);

      // ユーザー詳細データの保存
      $tudData = [
        'tud_user_id' => $user->mus_user_id,
        'tud_current_university' => $validatedData['tud_current_university'],
        'tud_first_industry_preference' => $validatedData['tud_first_industry_preference'],
        'tud_second_industry_preference' => $validatedData['tud_second_industry_preference'],
        'tud_event_attendance_remaining' => $validatedData['tud_event_attendance_remaining'],
        'tud_interview_count_remaining' => $validatedData['tud_interview_count_remaining'],
        'tud_case_study_count_remaining' => $validatedData['tud_case_study_count_remaining'],
        'tud_es_count_remaining' => $validatedData['tud_es_count_remaining'],
      ];
      $userDetail = UserDetail::create($tudData);

      // トランザクションをコミット
      DB::commit();
      
      if ($user && $userDetail) {
        return Redirect::route('admin.menteeIndex')->with('status', 'ユーザーの作成に成功しました。');
      }
    } catch (\Exception $e) {
      DB::rollBack();
      return Redirect::route('admin.menteeIndex')->with('error', 'ユーザーの作成に失敗しました。');
    }
  }
}
