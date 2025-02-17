<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   // use HasFactory;

    public $timestamps=false;
    // Disable auto-increment for the primary key if necessary
    public $incrementing = true;

    // If your primary key is not named "id" , set the key name
    protected $primaryKey = 'user_id';
    protected $table = 'user';

    // Fillable columns to avoid mass assignment issues
    protected $fillable = [
        'email',
        'fullname',
        'department',
        'contact_number',
    ];

   
}