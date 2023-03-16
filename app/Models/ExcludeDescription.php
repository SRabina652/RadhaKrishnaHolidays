<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcludeDescription extends Model
{
    use HasFactory;

    public function pakage(){
        return $this->belongsTo(Pakages::class);
    }
}
