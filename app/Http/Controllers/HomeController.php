<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function product(){
        $data_product=Dress::all();
       $data=[
           'dress' =>$data_product
       ];
        return view('product',$data);
    }
}
