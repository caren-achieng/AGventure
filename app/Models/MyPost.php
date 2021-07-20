<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPost extends Model
{
    protected $table='my_posts';
    protected $guarded=[];
    use HasFactory;
}
