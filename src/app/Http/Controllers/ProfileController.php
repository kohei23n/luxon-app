<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\SelectionStatus;

class ProfileController extends Controller
{
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        $user->fill([
            'mus_email_address' => $request->mus_email_address,
            'mus_user_first_name' => $request->mus_user_first_name,
            'mus_user_last_name' => $request->mus_user_last_name,
            'mus_current_university' => $request->mus_current_university,
            'mus_service_plan' => $request->mus_service_plan,
            'mus_first_industry_preference' => $request->mus_first_industry_preference,
            'mus_second_industry_preference' => $request->mus_second_industry_preference,
        ]);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'プロフィールが更新されました。');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
