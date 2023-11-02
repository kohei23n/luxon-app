<?php

namespace App\Http\Controllers\MyPage\Plan\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        $user->load('userDetail');

        return view('mypage.plan.profile.edit', compact('user'));
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // ユーザー詳細を取得
        $user = $request->user();
        $userDetail = $user->userDetail()->first();

        // user_detail モデルに対する入力値で更新
        $userDetail->fill([
            'tud_first_industry_preference' => $request->tud_first_industry_preference,
            'tud_second_industry_preference' => $request->tud_second_industry_preference,
        ]);

        $userDetail->save();

        return Redirect::route('mypage.plan.profileEdit')->with('status', 'profile-updated');
    }
}
