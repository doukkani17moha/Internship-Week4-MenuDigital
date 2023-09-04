<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Plat extends Model
{
    use HasFactory;
    
    protected $guarded=['id'];
    protected $fillable = [
        'plat_name', 'plat_descr', 'plat_img', 'plat_price', 'plat_avail', 'plat_time', 'rating', 'categorie_id'
    ];
}
