<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response($products, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->validated());
        return response($product, Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response($product, Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, UpdateProductRequest $request)
    {
        $product->update($request->validated());
        return response($product, Response::HTTP_ACCEPTED);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
