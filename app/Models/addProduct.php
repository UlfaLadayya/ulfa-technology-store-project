<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addProduct extends Model
{
    use HasFactory;
    public $table = "add_product";

    protected $fillable =[
        'nama_product', 'kategori', 'harga', 'foto'
    ];
    public $timestamps = false;
}
