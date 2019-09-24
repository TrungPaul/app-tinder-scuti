<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DislikeCandidate extends Model
{
    protected $table = 'candidate_dislike';
    protected $fillable = [
        'candidate_id',
        'company_id',
        'status'
    ];
    public function candidates()
    {
        return $this->belongsTo('App\Candidate');
    }
    public function addCandidateDislike($input)
    {
        return DislikeCandidate::create($input);
    }
}
