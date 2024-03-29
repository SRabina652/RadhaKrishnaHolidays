<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayDescription extends Model
{
    use HasFactory;
    public $primaryKey = 'day_description_id';
    public function pakage(){
        return $this->belongsTo(Pakages::class);
    }
}
