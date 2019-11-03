<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','tell','social'];

    protected $guarded = ['id', 'created_at'];

    protected $table = 'users';
}
