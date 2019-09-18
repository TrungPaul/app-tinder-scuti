<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class CandidateLike extends Model
{
    protected $table = 'candidate_like';
    protected $fillable = [
        'candidate_id',
        'company_id',
        'status'
    ];
    public function candidates()
    {
        return $this->belongsTo('App\Candidate');
    }
    public function addCandidateLike($input)
    {
        return CandidateLike::create($input);
    }
}
