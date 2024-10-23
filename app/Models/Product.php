<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Tentukan tabel yang digunakan oleh model ini (jika berbeda dari nama model, dalam hal ini "products")
    protected $table = 'products';

    // Tentukan kolom mana yang bisa diisi melalui mass-assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}