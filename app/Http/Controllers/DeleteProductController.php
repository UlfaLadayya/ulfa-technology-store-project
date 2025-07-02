<?php

namespace App\Http\Controllers;
use App\Models\addProduct;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    public function deleteproduct($id){
        $products = addProduct::find($id);
        if(!$products){
            return redirect()->route('products.show')->with('error', 'Product is not found');
        }

        $products->delete();
        return redirect()->route('products.show')->with('success', 'Product has been successfully deleted');
    }
}
