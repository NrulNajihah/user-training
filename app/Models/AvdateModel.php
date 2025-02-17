<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvdateModel extends Model
{
   // use HasFactory;

    public $timestamps=false;
    // Disable auto-increment for the primary key if necessary
    public $incrementing = true;

    // If your primary key is not named "id" (it is "sID" in your case), set the key name
    protected $primaryKey = 'dID';
    protected $table = 'av_dates';

    // Fillable columns to avoid mass assignment issues
    protected $fillable = [
        'date',
        'status'
    ];

    
}