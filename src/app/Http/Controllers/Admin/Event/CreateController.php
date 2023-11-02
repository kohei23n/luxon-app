<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Event;
use App\Models\Industry;
use App\Models\Company;

class CreateController extends Controller
{
  public function add()
  {
    $industries = Industry::all();
    $companies = Company::all();

    return view('admin.event.add', compact('industries', 'companies'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'mev_industry_id' => 'required|integer',
      'mev_company_id' => 'required|integer',
      'mev_event_name' => 'required|string|max:255',
      'mev_event_overview' => 'required|string|max:255',
      'mev_event_description' => 'nullable|string|max:255',
      'mev_event_datetime' => 'required|date',
      'mev_event_participate_url' => 'required|string|max:255',
      'mev_event_materials_url' => 'nullable|string|max:255',
    ]);

    // データの保存
    $event = Event::create([
      'mev_industry_id' => $request->mev_industry_id,
      'mev_company_id' => $request->mev_company_id,
      'mev_event_name' => $request->mev_event_name,
      'mev_event_overview' => $request->mev_event_overview,
      'mev_event_description' => $request->mev_event_description,
      'mev_event_datetime' => $request->mev_event_datetime,
      'mev_event_participate_url' => $request->mev_event_participate_url,
      'mev_event_materials_url' => $request->mev_event_materials_url,
    ]);

    if ($event) {
      return Redirect::route('admin.eventAdd')->with('status', 'event-status-created');
    } else {
      return Redirect::route('admin.eventAdd')->with('error', 'error-creating-event-status');
    }
  }
}
