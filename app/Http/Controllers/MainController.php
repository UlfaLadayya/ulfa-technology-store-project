<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function dashboardscreen(){
        $products = penjualan::all();
        return view('dashboardscreen', [
            "title" => "Dashboard Screen",
            'products' => $products
        ]);
    }

    function admin(){
        $products = Product::all();
        //dump($products);
        //DB::table('add_product')->get();
        return view('admin', [
            "title" => "Product Screen",
            'products' => $products
        ]);
    }

    public $table = "add_product";

    // function editproduct($id){

    // }

    // function deleteproduct($id){
    //     Product::find($id)->delete();
    //     //DB::table('add_product')->get();
    //     return redirect()->route(products.show)->with('success', 'Product deleted successfully');
    // }
}
