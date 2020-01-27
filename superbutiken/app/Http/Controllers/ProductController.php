<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Reviews;
use App\Stores;
use App\ProductStore;
use DB;
class ProductController extends Controller{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      //
  }

  public function index(){
    return response()->json(Products::all());
  }

  //Returns product information data for specific products by id in a object.
  public function show($id){
    //Fetch data from database using eloquent.
    $products = Products::find($id);
    $productStore = ProductStore::where('product_id', $id)->get();
    $reviews = Reviews::where('product_id', $id)->get();
    
    //Starting to create the object for the selected product.
    $products->{"reviews"} = $reviews;
    $storeList = array();
    //Using loop to fetch the matching stores to each product.
    foreach($productStore as $val){
      $fetchStores = Stores::where('id', $val->store_id)->get();
      foreach($fetchStores as $store){
        $storeObject = $store;
        $storeObject->{"pivot"} = $val;
        $storeList[] = $storeObject;
      }
    }
    $products->{"stores"} = $storeList;
    
    return response()->json($products);
  }

  //Saves a new product to the database. Information that is saved is used 
  public function create(Request $request){
    $product = new Products;
    $product->title = $request->input('title');
    $product->brand = $request->input('brand');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->image = $request->input('image');
    $product->save();

    $choosenStores = $request->input('stores');
    $id = DB::table('products')->latest('id')->first();
    foreach($choosenStores as $choosenStore){
      $choosenStoreInt = intval($choosenStore);
      $temp_stores = new ProductStore;
      $temp_stores->store_id = $choosenStoreInt;
      $temp_stores->product_id = $id->id;
      $temp_stores->save();
    }

    return response()->json(['success' => true], 201); 
  }
}