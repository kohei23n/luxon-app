<?php

namespace App\Http\Controllers\Admin\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Mentor;

class IndexController extends Controller
{
    public function __invoke()
    {
        //選考情報表示
        $mentors = Mentor::all();

        return view('admin.mentee.index', compact('mentors'));
    }
}