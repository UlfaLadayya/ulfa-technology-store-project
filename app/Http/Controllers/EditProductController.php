<?php

namespace App\Http\Controllers;
use App\Models\EditProduct;
use App\Models\addProduct;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    function editproductscreen($id){
        $product = addProduct::find($id);
        if (!$product) {
            return redirect()->route('products.show')->with('fail', 'Product is not found');
        }
        return view('editproductscreen', [
            "title" => "Edit Product Screen",
            "product" => $product
        ]);
    }

    public function updateproducts(Request $request, $id){
        $request->validate([
            'nama_product'=> 'required',
            'kategori'=> 'required',
            'harga'=> 'required',
            'foto'=> 'required'
        ]);

        $product = addProduct::find($id);
        if (!$product) {
            return redirect()->route('products.show')->with('fail', 'Product is not found');
        }

        $product->nama_product = $request->input('nama_product');
        $product->kategori = $request->input('kategori');
        $product->harga = $request->input('harga');

        if ($request->hasFile('foto')) {
            if ($product->foto) {
                $oldPhotoPath = public_path('uploads/' . $product->foto);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            $filePhoto = $request->file('foto');
            $newFilePhoto = time() . '.' . $filePhoto->getClientOriginalExtension();
            $filePhoto->move(public_path('uploads'), $newFilePhoto);
            $product->foto = $newFilePhoto;
        }

        $product->save();
        return redirect()->route('products.show')->with('success','Product has been successfuly update');
    }
}

    // public function editproducts($id){
    //     $product = AddProduct::find($id);
    //     if (!$product) {
    //         return redirect()->route('products.show')->with('fail', 'Product is not found');
    //     }
    //     return view('editproductscreen', compact('product'));
    // }
