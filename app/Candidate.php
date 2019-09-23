<?php

namespace App;

use App\Condition;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Contact;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $fillable = [
        'name',
        'nationality',
        'gender',
        'DoB',
        'current_add',
        'request',
        'exp',
        'location',
        'user_id',
        'image'
    ];

    public function conditions()
    {
        return $this->hasOne('App\Condition', 'candidate_id', 'id');
    }

    public function contacts()
    {
        return $this->hasOne('App\Contact', 'candidate_id', 'id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function candidateLike()
    {
        return $this->hasMany('App\CandidateLike', 'candidate_id', 'id');
    }
    public function candidateDislike()
    {
        return $this->hasMany('App\DislikeCandidate', 'candidate_id', 'id');
    }
    public function addInfoCandidate($input)
    {
        return Candidate::create($input);
    }
    public function updateInfoCandidate($input)
    {
        return Candidate::update($input);
    }
    public function getInfoCandidate()
    {
        $id = Auth::user()->id;
        $user = User::with('candidates', 'company')->find($id)->toArray();
        $candidate = Candidate::where('user_id', $id)->first();
        $candidate =  $candidate->load('conditions');
        $idCandidate = $candidate['id'];

        return $idCandidate;
    }
    public function infoCandidate($request)
    {
        $id = Auth::user()->id;
        $user = User::with('candidates', 'company')->find($id)->toArray();
        $candidate = Candidate::where('user_id', $id)->first();
        $idCandidate = $candidate['id'];
        $input = $request->only([
            'name',
            'nationality',
            'gender',
            'DoB',
            'current_add',
            'request',
            'exp',
            'location',
            'image'
        ]);
        $input1 = $request->only([
            'job_type',
            'period',
            'yearly_salary',
            'language_skill',
            'other_skill'
        ]);
        $input2 = $request->only([
            'phone',
            'email',
            'facebook',
            'company_id'
        ]);
        if ($user['candidates'] == null) {
            $input['user_id'] = $id;
            $candidate = $this->addInfoCandidate($input);
            $input1['candidate_id'] = $candidate->id;
            $newCondition = new Condition();
            $addCondition = $newCondition->addConditionCandidate($input1);
            $input2['candidate_id'] = $candidate->id;
            $newContact = new Contact();
            $addContact = $newContact->addContactCandidate($input2);
        }else {
            $updateContact = $candidate->updateInfoCandidate($input);
            $updateCondition = (new Condition)->updateInfoCondition($input1,$idCandidate);
            $updateContact = (new Contact)->updateInfoContact($input2,$idCandidate);
        }
    }
}
