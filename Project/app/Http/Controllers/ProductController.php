<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this -> products = [
            ["id" => 1, "name" => "Konosuba", "tag" => "Isekai"],
            ["id" => 1, "name" => "Solo Leveling", "tag" => "Action"]
        ];
    }

    public function index()
    {
        return view('products', ['products' => $this-> products]);
    }
}
