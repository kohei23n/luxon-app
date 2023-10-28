<?php

namespace App\Http\Controllers\Admin\Review\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EsQuestion;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $type = $request->input('type');

        switch ($type) {
            case 'unassigned':
                $entrySheets = EsQuestion::where('tes_mentor_id', null)->get();
                break;
            case 'assigned':
                $entrySheets = EsQuestion::whereNotNull('tes_mentor_id')->where('tes_is_returned', false)->get();
                break;
            case 'returned':
                $entrySheets = EsQuestion::where('tes_is_returned', true)->get();
                break;
            default:
                $entrySheets = EsQuestion::all(); 
        }

        return view('admin.review.es.index', compact('entrySheets', 'type'));
    }
}
