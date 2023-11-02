<?php

namespace App\Http\Controllers\Admin\Count;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::where('mus_is_admin', 0)->where('mus_is_mentor', 0)->get();

        return view('admin.count.index', compact('users'));
    }
}
