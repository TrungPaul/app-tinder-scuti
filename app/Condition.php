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
    public function addConditionCandidate($dataCondition)
    {
        return Condition::create($dataCondition);
    }
    public function updateInfoCondition($dataCondition,$candidate)
    {
        $condition = Condition::where('candidate_id', $candidate->id)->first();
        if ($condition) {
            return $condition->update($dataCondition);
        }

        return $this->addConditionCandidate($dataCondition);
    }
}
