<?php

namespace App\Http\Controllers\Admin\Review\Case;

use App\Http\Controllers\Controller;
use App\Models\CaseQuestion;

class CountController extends Controller
{
    public function __invoke()
    {
        //未割り振りのケースの合計を取得
        $unassigned = CaseQuestion::where('tca_mentor_id', null)->count();

        // 割り振り済み、未返却のケースの合計を取得
        $assigned = CaseQuestion::whereNotNull('tca_mentor_id')->where('tca_is_returned', false)->count();

        // 返却済みのケースの合計を取得
        $returned = CaseQuestion::where('tca_is_returned', true)->count();

        return view('admin.review.case.count', compact('unassigned', 'assigned', 'returned'));
    }
}
