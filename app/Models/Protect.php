<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Protect extends Model
{
    protected $fillable =[
        'protect_title', 'short_p','pro_rules1','pro_rules2','pro_rules3','image'
    ];
}
