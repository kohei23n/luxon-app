<?php

namespace App\Http\Controllers\Admin\Mentee;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        //選考情報表示
        $users = User::where('mus_is_admin', 0)->get();

        return view('admin.mentee.index', compact('users'));
    }
}