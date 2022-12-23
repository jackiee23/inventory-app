<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oitem extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function stuff(){
        return $this->belongsTo(Stuff::class);
    }
}
