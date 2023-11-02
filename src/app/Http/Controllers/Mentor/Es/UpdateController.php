<?php

namespace App\Http\Controllers\Mentor\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\EsQuestion;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $entrySheet = EsQuestion::with(['user', 'company'])->findOrFail($id);

    return view('mentor.es.edit', compact('entrySheet'));
  }

  public function update($id): RedirectResponse
  {
    $entrySheet = EsQuestion::findOrFail($id);

    $entrySheet->update([
      'tes_is_returned' => EsQuestion::IS_RETURNED,
    ]);

    return Redirect::route('mentor.esIndex')->with('status', 'es-status-updated');
  }
}
