<?php


//this model is for the db_table userlist where it stores all the list of users that being added. The encryption algorithm that being used for the password is the bcrypt.
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
