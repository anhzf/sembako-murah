<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
  public function index()
  {
    $provinceList = Address::getProvinces();
    $cityList = $this->getUserCityOptions();

    return view('pages.dashboard.account-settings', compact('provinceList', 'cityList'));
  }

  public function saveSettings(Request $request)
  {
    $postData = $request->except(['name', 'email']);
    $validator = Validator::make($postData, [
      'name' => 'prohibited',
      'email' => 'prohibited',
      'address_one' => 'string|nullable',
      'address_two' => 'string|nullable',
      'province_id' => 'numeric|nullable',
      'regency_id' => 'numeric|nullable',
      'zip_code' => 'string|nullable',
      'country' => 'string|nullable',
      'phone_number' => 'string|nullable',
    ]);

    $validator->validate();

    /**
     * @var \App\Models\User
     */
    $user = $request->user();

    $user->update($postData);

    return redirect()->back();
  }

  private function getUserCityOptions()
  {
    return Address::getCities(request()->user()->province_id);
  }
}
