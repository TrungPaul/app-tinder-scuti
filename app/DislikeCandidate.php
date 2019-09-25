<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DislikeCandidate extends Model
{
    const NUMBER_CANDIDATE_DISLIKE = 10;
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
    public function countTotalDisLike($idCandidate)
    {
        $count = DislikeCandidate::where('candidate_id', $idCandidate)->count();

        return $count;
    }
    public function perpageCandidateDislike($numberload)
    {
        $perpage = $numberload*self::NUMBER_CANDIDATE_DISLIKE;

        return $perpage;
    }
    public function listDislike($numberload, $idCandidate)
    {
        $perpage = $this->perpageCandidateDislike($numberload);
        $result = DislikeCandidate::where('candidate_id', $idCandidate)->offset(0)->limit($perpage)->get();

        return $result;
    }
}
