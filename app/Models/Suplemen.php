<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplemen extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama",
        "harga",
        "berat",
        "jml_vitamin_a",
        "jml_vitamin_b",
        "jml_vitamin_c",
    ];
}
