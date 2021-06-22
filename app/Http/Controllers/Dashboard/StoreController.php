<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\UI;
use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
  public function __construct()
  {
    $this->authorize('organize-product');
  }

  public function edit()
  {
    return view('pages.dashboard.setting');
  }

  public function update(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|string',
    ]);

    if (Store::updateName($validated['name'])) {
      UI::notifySuccess('Successfully updated store settings!');
    } else {
      UI::notifyError('Error while updating store settings :(');
    }

    return redirect()
      ->action([self::class, 'edit']);
  }
}
