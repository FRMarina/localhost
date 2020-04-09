<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmallProductController extends Controller
{
  public function getSmall(){ 
  	return view('product-viko');
  }
    public function getSmall2(){ 
    return view('product-viko2');
  }
    public function getSmall3(){ 
    return view('product-viko3');
  }
    public function getSmall4(){ 
    return view('product-legrand');
  }
      public function getSmall5(){ 
    return view('product-schneider');
  }
}
