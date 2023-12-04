<?php

namespace App\Http\Controllers\Admin\Mentee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserDetail;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $user = User::with('userDetail')->findOrfail($id);
    $mentors = User::whereHas('mentorProfile')->get();

    return view('admin.mentee.edit', compact('user', 'mentors'));
  }

  public function update($id, Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $validatedData = $request->validate([
      'mus_email_address' => 'required|string|max:255',
      'mus_user_last_name' => 'required|string|max:255',
      'mus_user_first_name' => 'required|string|max:255',
      'tud_current_university' => 'required|string|max:255',
      'tud_first_industry_preference' => 'required|string|max:255',
      'tud_second_industry_preference' => 'required|string|max:255',
      'mus_dedicated_mentor_id' => 'required|integer',
    ]);

    try {
      DB::beginTransaction();

      // ユーザーデータの保存
      $user = User::findOrFail($id); // $userId は更新対象のユーザーID
      $user->mus_email_address = $validatedData['mus_email_address'];
      $user->mus_user_last_name = $validatedData['mus_user_last_name'];
      $user->mus_user_first_name = $validatedData['mus_user_first_name'];
      $user->mus_dedicated_mentor_id = $validatedData['mus_dedicated_mentor_id'];
      $user->save();

      // ユーザー詳細データの保存
      $userDetail = UserDetail::where('tud_user_id', $id)->first(); 
      $userDetail->tud_current_university = $validatedData['tud_current_university'];
      $userDetail->tud_first_industry_preference = $validatedData['tud_first_industry_preference'];
      $userDetail->tud_second_industry_preference = $validatedData['tud_second_industry_preference'];
      $userDetail->save();

      // トランザクションをコミット
      DB::commit();

      if ($user && $userDetail) {
        return Redirect::route('admin.menteeIndex')->with('status', 'メンティーの情報が更新されました。');
      }
    } catch (\Exception $e) {
      DB::rollBack();

      $errorMessage = 'メンティーの編集に失敗しました。';
      if ($e instanceof \Illuminate\Database\QueryException) {
        // QueryException の場合の処理
        $errorMessage .= ' データベースエラーが発生しました。';
      } else {
        // その他の例外の場合の処理
        $errorMessage .= ' 不明なエラーが発生しました。';
      }

      return Redirect::route('admin.menteeIndex')->with('error', $errorMessage);
    }
  }
}
