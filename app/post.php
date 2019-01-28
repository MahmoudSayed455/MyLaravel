<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title' , 'content' , 'writer_name' , 'post_image'];
}
