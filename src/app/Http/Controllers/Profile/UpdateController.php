<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
    public function edit()
    {
        $user = auth()->user()->first();

        return view('profile.edit', compact('user'));
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        $user->fill([
            'mus_email_address' => $request->mus_email_address,
            'mus_user_first_name' => $request->mus_user_first_name,
            'mus_user_last_name' => $request->mus_user_last_name,
            'mus_current_university' => $request->mus_current_university,
            'mus_service_plan_id' => $request->mus_service_plan_id,
            'mus_first_industry_preference' => $request->mus_first_industry_preference,
            'mus_second_industry_preference' => $request->mus_second_industry_preference,
        ]);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}
