<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $fillable = [
        'name',
        'nationality',
        'gender',
        'DoB',
        'contact_id',
        'current_add',
        'request',
        'exp',
        'location',
        'condition_id',
        'user_id',
        'candidate_like_id',
        'candidate_dislike_id'
    ];
    public function conditions()
    {
        return $this->hasOne('App\Condition', 'candidate_id', 'id');
    }
    public function contacts()
    {
        return $this->hasOne('App\Contact', 'candidate_id', 'id');
    }
}
