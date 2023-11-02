<?php

namespace App\Http\Controllers\Admin\Review\Case;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseQuestion;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $type = $request->input('type');

        switch ($type) {
            case 'unassigned':
                $cases = CaseQuestion::with(['user', 'mentor'])->where('tca_mentor_id', null)->get();
                break;
            case 'assigned':
                $cases = CaseQuestion::with(['user', 'mentor'])->whereNotNull('tca_mentor_id')->where('tca_is_returned', false)->get();
                break;
            case 'returned':
                $cases = CaseQuestion::with(['user', 'mentor'])->where('tca_is_returned', true)->get();
                break;
            default:
                $cases = CaseQuestion::with(['user', 'mentor'])->get(); 
        }

        return view('admin.review.case.index', compact('cases', 'type'));
    }
}
