<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncludeDescription extends Model
{
    use HasFactory;

    public function pakages(){
        return $this->belongsTo(Pakages::class);
    }
}
