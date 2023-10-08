<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\SelectionStatus;
use App\Models\SelectionPlan;

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
        //ユーザー情報表示
        $user = auth()->user();

        // プラン情報取得
        $plan = SelectionPlan::where('tsp_plan_id', $user->mus_service_plan)->first();

        // 選考情報を取得
        $selectionStatuses = SelectionStatus::where('tss_user_id', $user->mus_user_id)->get();

        return view('profile.index', compact('user', 'selectionStatuses'));
    }
}
