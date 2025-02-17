<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramModel extends Model
{
   // use HasFactory;

    public $timestamps=false;
    // Disable auto-increment for the primary key if necessary
    public $incrementing = true;

    // If your primary key is not named "id" (it is "sID" in your case), set the key name
    protected $primaryKey = 'pID';
    protected $table = 'programs';

    // Fillable columns to avoid mass assignment issues
    protected $fillable = [
        'cID',
        'program_id',
        'program_name',
        'duration',
        'fee',
        'time',
        'practical_mode',
        'location',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class,'cID','cID');
    }
}