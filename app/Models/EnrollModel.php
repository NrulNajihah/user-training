<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollModel extends Model
{
   // use HasFactory;

    public $timestamps=false;
    // Disable auto-increment for the primary key if necessary
    public $incrementing = true;

    // If your primary key is not named "id" , set the key name
    protected $primaryKey = 'eID';
    protected $table = 'enrollments';

    // Fillable columns to avoid mass assignment issues
    protected $fillable = [
        'user_id',
        'pID',
        'dID',
        'receipt',
        'receiptFileName',
    ];

    public function user()
    {
        return $this->belongsTo(UserModel::class,'user_id','user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class,'cID','cID');
    }

    public function program()
    {
        return $this->belongsTo(ProgramModel::class,'pID','pID');
    }

    public function date()
    {
        return $this->belongsTo(AvdateModel::class,'dID','dID');
    }
}