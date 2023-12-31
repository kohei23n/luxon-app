<?php

namespace App\Http\Controllers\Admin\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Mentor;

class CreateController extends Controller
{
  public function add()
  {
    return view('admin.mentor.add');
  }
  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $validatedData = $request->validate([
      'mus_email_address' => 'required|string|max:255|unique:luxon_mst_user,mus_email_address',
      'mus_user_password' => 'required|string|max:255',
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
      $musData = [
        'mus_email_address' => $validatedData['mus_email_address'],
        'mus_user_password' => Hash::make($validatedData['mus_user_password']),
        'mus_user_last_name' => $validatedData['mus_user_last_name'],
        'mus_user_first_name' => $validatedData['mus_user_first_name'],
        'mus_is_mentor' => true,
      ];
      $user = User::create($musData);

      // メンター詳細データの保存
      $mmeData = [
        'mme_user_id' => $user->mus_user_id,
        'mme_line_url' => $validatedData['mme_line_url'],
        'mme_timerex_url' => $validatedData['mme_timerex_url'],
        'mme_timerex_url_short' => $validatedData['mme_timerex_url_short'],
        'mme_interview_salary' => $validatedData['mme_interview_salary'],
        'mme_lecture_create_salary' => $validatedData['mme_lecture_create_salary'],
        'mme_lecture_salary' => $validatedData['mme_lecture_salary'],
      ];
      $mentor = Mentor::create($mmeData);

      // トランザクションをコミット
      DB::commit();
      
      if ($user && $mentor) {
        return Redirect::route('admin.mentorIndex')->with('status', 'メンターが追加されました。');
      }
    } catch (\Exception $e) {
      DB::rollBack();

      $errorMessage = 'メンティーの追加に失敗しました。';
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
