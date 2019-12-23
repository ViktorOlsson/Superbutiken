<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;

class StoresController extends Controller{
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
    return Stores::all();
  }

  public function show($id){
    return Stores::find($id);
  }

}