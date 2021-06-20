<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\UI;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends ControllersProductController
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::all();

    return view('pages.dashboard.products-list', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $model = new Product();
    $action = route('dashboard.products.store');
    $categoryList = Category::all();

    return view('pages.dashboard.products-form', compact('model', 'action', 'categoryList'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(ProductPostRequest $request)
  {
    $product = parent::store($request);

    UI::notifySuccess("Successfully created {$product->getFullname()}");
    return redirect()
      ->route('dashboard.products.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $model)
  {
    $action = route('dashboard.products.update', ['model' => $model->getKey()]);
    $categoryList = Category::all();

    return view('pages.dashboard.products-form', compact('model', 'action', 'categoryList'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    return redirect()
      ->action([self::class, 'show']);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(ProductPostRequest $request, Product $model)
  {
    if (parent::update($request, $model)) {
      UI::notifySuccess("Successfully updated {$model->getFullname()}");
      return redirect()
        ->route('dashboard.products.index');
    }

    UI::notifyWarning("Failed to update {$model->getFullname()}");
    return redirect()
      ->route('dashboard.products.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $model)
  {
    if (parent::destroy($model)) {
      UI::notifySuccess("Successfully deleted {$model->getFullname()}");
      return redirect()
        ->route('dashboard.products.index');
    }

    UI::notifyWarning("Failed to delete {$model->getFullname()}");
    return redirect()
      ->route('dashboard.products.index');
  }
}
