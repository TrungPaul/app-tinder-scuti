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
//        $classCondition = new Condition;
////        $data = $request->only([
////            'job_type',
////            'period',
////            'yearly_salary',
////            'language_skill',
////            'other_skill',
////            'candidate_id'
////            ]);
////        $classCondition->job_type = $data['job_type'];
////        $classCondition->period = $data['period'];
////        $classCondition->yearly_salary = $data['yearly_salary'];
////        $classCondition->language_skill = $data['language_skill'];
////        $classCondition->other_skill = $data['other_skill'];
////        $classCondition->candidate_id= $idCandidate;
////
////        return $classCondition->save();
///

        return Condition::create($input1);
    }
    public function updateInfoCondition($input1,$idCandidate)
    {
       return Condition::where('candidate_id', $idCandidate)->update($input1);
    }
}
