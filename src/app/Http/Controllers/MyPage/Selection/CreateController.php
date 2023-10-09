<?php

namespace App\Http\Controllers\MyPage\Selection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SelectionStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CreateController extends Controller
{
    public function add()
    {
        return view('mypage.selection.add');
    }

    public function create(Request $request): RedirectResponse
    {
        // リクエストデータのバリデーション
        $request->validate([
            'tss_company_name' => 'required|string|max:255',
            'tss_selection_status' => 'required|string|in:選考前,選考中,合格,不合格',
            'tss_preference_ranking' => 'required|integer|min:1',
            'tss_selection_date' => 'required|date',
        ]);

        $user = auth()->user()->first();

        // データの保存
        $status = SelectionStatus::create([
            'tss_user_id' => $user->mus_user_id,
            'tss_company_name' => $request->tss_company_name,
            'tss_selection_status' => $request->tss_selection_status,
            'tss_preference_ranking' => $request->tss_preference_ranking,
            'tss_selection_date' => $request->tss_selection_date,
        ]);

        if ($status) {
            return Redirect::route('mypage.selectionIndex')->with('status', 'selection-status-created');
        } else {
            return Redirect::route('mypage.selectionIndex')->with('error', 'error-creating-selection-status');
        }
    }
}
