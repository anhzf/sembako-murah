<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPostRequest;
use App\Models\Product;
use Illuminate\Http\Request;
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
}
