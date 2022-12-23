<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iitem extends Model
{
    use HasFactory;
    public $guarded = ['id'];
 
    public function stuff()
    {
        return $this->belongsTo(Stuff::class);
    }
}
