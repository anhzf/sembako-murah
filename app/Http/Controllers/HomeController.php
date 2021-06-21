<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    if ($request->query('category')) {
      return $this->listProductByCategory();
    }

    $categoryList = Category::limit(12)->get();
    $productList = Product::all();

    return view('pages.home', compact('categoryList', 'productList'));
  }

  public function listProductByCategory()
  {
    $q = request()->query('category');

    /** @var Category */
    $category = Category::firstWhere('slug', $q);
    $productList = $category->products;
    $qForTitle = "category: {$q}";

    return view('pages.product-list', compact('productList', 'qForTitle'));
  }
}
