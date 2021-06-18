<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    public function index(){
      return view('pages.dashboard.dashboard-products');
    }

    public function addmenu(){
      return view('pages.dashboard.dashboard-products-create');
    }

    public function detail(){
      return view('pages.dashboard.dashboard-products-detail');
    }

}

