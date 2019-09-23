<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jds extends Model
{
    protected $table = 'jds';
    protected $fillable = [
        'job_title',
        'position',
        'rank_salary',
        'skill_set',
        'company_id'
    ];
    public function candidate()
    {
        return $this->hasOne('App\Candidate', 'candidate_id', 'id');
    }
    public function company()
    {
        return $this->hasOne('App\Company', 'company_id', 'id');
    }
    public function addJdsCompany($jds)
    {
        return Jds::create($jds);
    }
    public function updateInfoJds($information)
    {
        return Jds::update($information);
    }
}
