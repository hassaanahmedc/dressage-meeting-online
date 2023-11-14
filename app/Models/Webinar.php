<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_and_time',
        'title',
        'description',
        'presenter',
        'link',
        'price',
        'banner_image',
        'presenter_image',
    ];
}
