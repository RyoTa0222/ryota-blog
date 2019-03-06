<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    'id',
    'title',
    'link_name',
    'images_path',
    'description',
    'date_time',
    ];
    public $timestamps = false;
}
