<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function contactInformation(){
        return $this->hasMany(ContactInformation::class);
    }
    public function socialInformation(){
        return $this->hasMany(SocialInformation::class);
    }
    public function profesionalInformation(){
        return $this->hasMany(ProfesionalInformation::class);
    }
    protected $table = 'peoples';
}
