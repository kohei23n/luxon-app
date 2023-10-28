<?php

namespace App\Http\Controllers\Admin\Review\Es;

use App\Http\Controllers\Controller;
use App\Models\EsQuestion;

class CountController extends Controller
{
    public function __invoke()
    {
        //未割り振りのケースの合計を取得
        $unassigned = EsQuestion::where('tes_mentor_id', null)->count();

        // 割り振り済み、未返却のケースの合計を取得
        $assigned = EsQuestion::whereNotNull('tes_mentor_id')->where('tes_is_returned', false)->count();

        // 返却済みのケースの合計を取得
        $returned = EsQuestion::where('tes_is_returned', true)->count();

        return view('admin.review.es.count', compact('unassigned', 'assigned', 'returned'));
    }
}
