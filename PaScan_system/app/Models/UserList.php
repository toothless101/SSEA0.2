<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserList extends Authenticatable
{
    //
    use HasFactory;
    protected $table = 'userlist';

     // Define fillable fields to prevent mass-assignment issues
     protected $fillable = ['fullname', 'position', 'username', 'password', 'date'];

}
