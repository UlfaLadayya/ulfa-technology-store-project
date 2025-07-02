<?php

namespace App\Http\Controllers;
use App\Models\AddProduct;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    function addformproductscreen(){
        return view('addproductformscreen', [
            "title" => "Form Add Product Screen",
        ]);
    }

    function simpanproduct(Request $request){
        $request->validate([
            'nama_product'=> 'required',
            'kategori'=> 'required',
            'harga'=> 'required',
            'foto'=> 'required'
        ]);
        //dd($request->all());
        $addProduct = new addProduct;
        $addProduct->nama_product = $request->nama_product;
        $addProduct->kategori = $request->kategori;
        $addProduct->harga = $request->harga;
        $addProduct->foto = $request->foto;
        
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $photoname = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads'), $photoname);
            // storeAs('public/uploads', $photoname)
            $addProduct->foto = $photoname;
        }
        $save = $addProduct->save();

        if ($save) {
            return redirect()->route('products.show')->with('success','Product has been successfuly added');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
}
