<?php

namespace App\Models;

use App\Models\IncludeDescription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakages extends Model
{
    use HasFactory;

    public function includeDescriptions(){
        return $this->hasMany(IncludeDescription::class);
    }

}
