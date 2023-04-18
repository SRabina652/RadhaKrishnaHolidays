<?php

namespace App\Models;

use App\Models\IncludeDescription;
use App\Models\ExcludeDescription;
use App\Models\DayDescription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakages extends Model
{
    use HasFactory;
    //one to many relationship of the include table and the pakage table
    public function includeDescriptions(){
        return $this->hasMany(IncludeDescription::class);
    }

    //one to many relationship of the include table and the pakage table
    public function excludeDescriptions(){
        return $this->hasMany(ExcludeDescription::class);
    }

    //one to many relationship of the description of days and the pakage
    public function dayDescription(){
        return $this->hasMany(DayDescription::class);  
    }

}
