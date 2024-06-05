<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homePage(Request $request){
        $data = [
            'pageTitle'=>'MyEcolo | Minimize Waste, Maximize Taste',
        ];
        return view('front.pages.home',$data);
    }
}
