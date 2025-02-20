<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =[
        'title','image_icon','bg_image','description'
    ];
}
