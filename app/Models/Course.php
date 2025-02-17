<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   // use HasFactory;

    public $timestamps=false;
    // Disable auto-increment for the primary key if necessary
    public $incrementing = true;

    // If your primary key is not named "id" (it is "sID" in your case), set the key name
    protected $primaryKey = 'cID';
    protected $table = 'courses';

    // Fillable columns to avoid mass assignment issues
    protected $fillable = [
        'course_id',
        'course_name',
    ];

   
}