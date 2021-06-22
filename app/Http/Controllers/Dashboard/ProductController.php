<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\UI;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends ControllersProductController
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    Gate::authorize('organize-store');
    $products = Product::all();

    return view('pages.dashboard.products-list', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    Gate::authorize('organize-store');
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
    Gate::authorize('organize-store');
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
    Gate::authorize('organize-store');
    $action = route('dashboard.products.update', ['model' => $model]);
    $categoryList = Category::all();

    return view('pages.dashboard.products-form', compact('model', 'action', 'categoryList'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    Gate::authorize('organize-store');
    return redirect()
      ->action([self::class, 'show']);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(ProductPostRequest $request, Product $model)
  {
    Gate::authorize('organize-store');
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
    Gate::authorize('organize-store');
    if (parent::destroy($model)) {
      UI::notifySuccess("Successfully deleted {$model->getFullname()}");
      return redirect()
        ->route('dashboard.products.index');
    }

    UI::notifyWarning("Failed to delete {$model->getFullname()}");
    return redirect()
      ->route('dashboard.products.index');
  }

  public function storePhotos(Request $request, Product $model)
  {
    Gate::authorize('organize-store');
    parent::storePhotos($request, $model);

    return redirect()->back();
  }
}
