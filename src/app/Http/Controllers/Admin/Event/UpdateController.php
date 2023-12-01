<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Industry;
use App\Models\Company;
use App\Models\Event;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $industries = Industry::all();
    $companies = Company::all();

    $event = Event::with(['industry', 'company'])->findOrFail($id);

    return view('admin.event.edit', compact('industries', 'companies', 'event'));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'mev_industry_id' => 'required|integer',
      'mev_event_name' => 'required|string|max:255',
      'mev_event_overview' => 'required|string|max:255',
      'mev_event_description' => 'nullable|string|max:255',
      'mev_event_datetime' => 'required|date',
      'mev_event_participate_url' => 'required|string|max:255',
      'mev_event_materials_url' => 'nullable|string|max:255',
    ]);

    $event = Event::findOrfail($id);

    // データの保存
    $event->update([
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
      return Redirect::route('admin.eventShow', $id)->with('status', 'イベント情報が更新されました。');
    } else {
      return Redirect::route('admin.eventShow', $id)->with('error', 'イベント情報の更新に失敗しました。');
    }
  }
}
