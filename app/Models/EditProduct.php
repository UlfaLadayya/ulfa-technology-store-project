<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditProduct extends Model
{
    use HasFactory;
    public $table = "add_product";

    protected $fill =[
        'nama_product', 'kategori', 'harga', 'foto'
    ];
    public $timestamps = false;
}
