<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;


    //For creting an eloquent relaionship between the employer and the job ( many jobs belong to single employer)
public function jobs(){
    return $this->hasMany(Job::class);
}

}
