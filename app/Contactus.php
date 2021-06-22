<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'content', 'created_at', 'updated_at'];
}
