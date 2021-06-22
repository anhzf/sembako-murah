<?php

namespace App\Http\Controllers;

use App\Helpers\UI;
use App\Http\Requests\ProductPostRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return response()->json(Product::all());
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(ProductPostRequest $request)
  {
    $validated = $request->validated();

    return Product::create($validated);
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $model)
  {
    return view('pages.detail', compact('model'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(ProductPostRequest $request, Product $product)
  {
    $validated = $request->validated();

    return $product->update($validated);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $model)
  {
    Gate::authorize('organize-product');

    return $model->delete();
  }

  public function storePhotos(Request $request, Product $model)
  {
    Gate::authorize('organize-product');

    $photos = $request->file('photos');
    $paths = collect(is_array($photos) ? $photos : [$photos])
      ->map(fn (UploadedFile $file) => $file->storePublicly($model->getStoragePath()));
    $savedPaths = $paths->filter();

    $model->photos = [...$model->photos, ...$savedPaths->all()];

    $success = $savedPaths->isNotEmpty() && $model->save();

    if ($success) {
      UI::notifyError("Error when adding photo to {$model->getFullname()}");
    } else {
      UI::notifySuccess("Successfully added photo to {$model->getFullname()}");
    }

    return $success;
  }

  public function deletePhoto(Request $request, Product $model)
  {
    dd($request->all());
  }
}
