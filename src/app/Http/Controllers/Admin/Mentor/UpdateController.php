<?php

namespace App\Http\Controllers\Admin\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Mentor;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $mentor = User::with('mentorProfile')->findOrfail($id);

    return view('admin.mentor.edit', compact('mentor'));
  }

  public function update($id, Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $validatedData = $request->validate([
      'mus_email_address' => 'required|string|max:255',
      'mus_user_last_name' => 'required|string|max:255',
      'mus_user_first_name' => 'required|string|max:255',
      'mme_line_url' => 'nullable|string|max:255',
      'mme_timerex_url' => 'nullable|string|max:255',
      'mme_timerex_url_short' => 'nullable|string|max:255',
      'mme_interview_salary' => 'nullable|integer',
      'mme_lecture_create_salary' => 'nullable|integer',
      'mme_lecture_salary' => 'nullable|integer',
    ]);

    try {
      DB::beginTransaction();

      // ユーザーデータの保存
      $mentor = User::findOrFail($id); // $mentorId は更新対象のユーザーID
      $mentor->mus_email_address = $validatedData['mus_email_address'];
      $mentor->mus_user_last_name = $validatedData['mus_user_last_name'];
      $mentor->mus_user_first_name = $validatedData['mus_user_first_name'];
      $mentor->save();

      // メンター詳細データの保存
      $mentorProfile = Mentor::where('mme_user_id', $id)->first(); 
      $mentorProfile->mme_line_url = $validatedData['mme_line_url'];
      $mentorProfile->mme_timerex_url = $validatedData['mme_timerex_url'];
      $mentorProfile->mme_timerex_url_short = $validatedData['mme_timerex_url_short'];
      $mentorProfile->mme_interview_salary = $validatedData['mme_interview_salary'];
      $mentorProfile->mme_lecture_create_salary = $validatedData['mme_lecture_create_salary'];
      $mentorProfile->mme_lecture_salary = $validatedData['mme_lecture_salary'];
      $mentorProfile->save();

      // トランザクションをコミット
      DB::commit();

      if ($mentor && $mentorProfile) {
        return Redirect::route('admin.mentorIndex')->with('status', 'メンターの情報が更新されました。');
      }
    } catch (\Exception $e) {
      DB::rollBack();

      \Log::error($e);

      $errorMessage = 'メンターの編集に失敗しました。';
      if ($e instanceof \Illuminate\Database\QueryException) {
        // QueryException の場合の処理
        $errorMessage .= ' データベースエラーが発生しました。';
      } else {
        // その他の例外の場合の処理
        $errorMessage .= ' 不明なエラーが発生しました。';
      }

      return Redirect::route('admin.mentorIndex')->with('error', $errorMessage);
    }
  }
}
