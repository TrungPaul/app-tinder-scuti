<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $table = 'conditions';
    protected $fillable = [
        'job_type',
        'period',
        'yearly_salary',
        'language_skill',
        'other_skill',
        'candidate_id'
    ];
    public function candidate()
    {
        return $this->hasOne('App\Candidate', 'candidate_id', 'id');
    }
    public function company()
    {
        return $this->hasOne('App\Company', 'company_id', 'id');
    }
    public function addConditionCandidate($input1)
    {
        return Condition::create($input1);
    }
    public function updateInfoCondition($input1)
    {
        return Condition::update($input1);
    }
}
