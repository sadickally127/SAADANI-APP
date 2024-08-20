<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['Title', 'Salary', 'Location'];


    //For creting an eloquent relaionship between the employer and the job ( single Employer owns many jobs/many jobs belong to an employer)
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
