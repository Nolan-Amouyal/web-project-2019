<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PanierController extends Controller
{
    public function index()
    {
        $products=Product::all()->where('id', '=', session('idpro'));
        return view('pages.panier',['products' => $products]);
    }
}
