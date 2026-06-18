<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    'site_name',
    'email',
    'location', 
    'phone',     
    'logo_light', 
    'images', 
];


}
