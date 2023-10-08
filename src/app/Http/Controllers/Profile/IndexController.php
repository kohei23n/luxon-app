<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\SelectionStatus;
use App\Models\ServicePlan;
use App\Models\Mentor;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $user = auth()->user()->load('servicePlan', 'dedicatedMentor', 'selectionStatuses');

        $user = auth()->user()->with(['servicePlan', 'dedicatedMentor', 'selectionStatuses'])->first();

        return view('profile.index', compact('user'));
    }
}
