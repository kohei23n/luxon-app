<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Mentor;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // ユーザーログインを試みる
        if (Auth::guard('web')->attempt(['mus_email_address' => $request->mus_email_address, 'password' => $request->mus_user_password])) {
            $request->session()->regenerate();

            $user = Auth::guard('web')->user();

            if ($user->mus_is_admin == User::IS_ADMIN) {
                return redirect(RouteServiceProvider::ADMIN_HOME);
            }
            
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // 手動でパスワードの確認
        // $mentor = Mentor::where('mme_email_address', $request->mus_email_address)->first();

        // if ($mentor) {
        //     $isPasswordCorrect = Hash::check($request->mus_user_password, $mentor->mme_password);
        //     if ($isPasswordCorrect) {
        //         \Log::info('Password is correct for mentor with email: ' . $mentor->mme_email_address);
        //     } else {
        //         \Log::info('Password is incorrect for mentor with email: ' . $mentor->mme_email_address);
        //     }
        // } else {
        //     \Log::info('Mentor with email ' . $request->mus_email_address . ' not found.');
        // }

        // メンターログインを試みる
        if (Auth::guard('mentor')->attempt(['mme_email_address' => $request->mus_email_address, 'password' => $request->mus_user_password])) {
            $request->session()->regenerate();

            \Log::info('Authentication successful for:', [Auth::guard('mentor')->user()]);

            if (Auth::guard('mentor')->check()) {
                \Log::info('User is authenticated via mentor guard');
            } else {
                \Log::info('User is NOT authenticated via mentor guard');
            }

            return redirect(RouteServiceProvider::MENTOR_HOME);
        } else {
            \Log::info($request->all());
        }

        return back()->withErrors([
            'mus_email_address' => '認証に失敗しました。',
        ]);


        // $request->authenticate();

        // $request->session()->regenerate();

        // // ログインしたユーザーを取得
        // $user = auth()->user();

        // // ユーザーが管理者の場合は ADMIN_HOME にリダイレクト
        // if ($user->mus_is_admin == User::IS_ADMIN) {
        //     return redirect(RouteServiceProvider::ADMIN_HOME);
        // }

        // // それ以外の場合は通常のホームページにリダイレクト
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
