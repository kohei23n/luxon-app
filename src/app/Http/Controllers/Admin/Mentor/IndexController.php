<?php

namespace App\Http\Controllers\Admin\Mentor;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $mentors = User::whereHas('mentorProfile')->get();

        return view('admin.mentor.index', compact('mentors'));
    }
}