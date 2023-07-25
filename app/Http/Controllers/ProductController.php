<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function laptop()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.laptop')->with("viewData", $viewData);
    }

    public function Pc()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.pc')->with("viewData", $viewData);
    }

    public function Processor()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.processor')->with("viewData", $viewData);
    }

    public function Gaming()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.gaming')->with("viewData", $viewData);
    }

    public function Audio()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.audio')->with("viewData", $viewData);
    }

    public function Accessories()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        $viewData["categories"] = Category::all();
        return view('product.accessories')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName() . " - Online Store";
        $viewData["subtitle"] = $product->getName() . " - Product information";
        $viewData["products"] = $product;
        $viewData["product"] = Product::find($id);
        ;
        return view('product.show')->with("viewData", $viewData);
    }
}