<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviews;

class ReviewsController extends Controller{
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
    return Reviews::all();
  }

  public function show($id){
    return Reviews::find($id);
  }

}