<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\UI;
use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StoreController extends Controller
{
  public function edit()
  {
    Gate::authorize('organize-store');
    return view('pages.dashboard.setting');
  }

  public function update(Request $request)
  {
    Gate::authorize('organize-store');
    $validated = $request->validate([
      'name' => 'required|string',
      'description' => 'nullable|string',
      'photo' => 'nullable|image',
    ]);

    if (
      Store::setName($validated['name'])
      && Store::setDescription($validated['description'])
      && (isset($validated['photo']) ? Store::setPhoto($validated['photo']) : true)
    ) {
      UI::notifySuccess('Successfully updated store settings!');
    } else {
      UI::notifyError('Error while updating store settings :(');
    }

    return redirect()
      ->action([self::class, 'edit']);
  }
}
