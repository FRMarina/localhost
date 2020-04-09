<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
  public function getViko(){ 
  	return view('sockets_viko');
  }

  public function getSchneider(){ 
  	return view('sockets_schneider');
  }

    public function getLegrand(){ 
  	return view('sockets_legrand');
  }


   public function getVikoBreakers(){ 
  	return view('breakers_viko');
  }

    public function getSchneiderBreakers(){ 
  	return view('breakers_schneider');
  }

     public function getLegrandBreakers(){ 
  	return view('breakers_legrand');
  }

     public function getExtensions(){ 
  	return view('extensions');
  }

    public function getWork(){ 
    return view('work');
  } 
  
   public function getRams(){ 
    return view('rams');
  } 

}
