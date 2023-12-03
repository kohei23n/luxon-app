<?php

namespace App\Http\Controllers\Admin\Mentee;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        //選考情報表示
        $users = User::with(['userDetail', 'dedicatedMentor'])->where('mus_is_admin', 0)->where('mus_is_mentor', 0)->get();

        // 専属メンターの名前を取得
        $users->each(function ($user) {

            dd($user->userDetail);
            
            $mentor = User::with('mentorProfile')
                ->where('mus_user_id', $user->mus_dedicated_mentor_id)
                ->first();

            $user->dedicatedMentorName = $mentor ? $mentor->mus_user_last_name : null;
        });

        return view('admin.mentee.index', compact('users'));
    }
}
