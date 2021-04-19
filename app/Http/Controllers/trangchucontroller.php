<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trangchucontroller extends Controller
{
      public function getindex(){
          return view('page.main');
        }
    
        public function getproduct(){
            return view('page.product');
        }
        public function getcategory(){
            return view('page.category');
        }
        public function getcheckout(){
            return view('page.checkout');
        }
}
