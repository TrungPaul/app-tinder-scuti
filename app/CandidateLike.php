<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Candidate;

class CandidateLike extends Model
{
    const NUMBER_CANDIDATE_LIKE = 10;
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
    public function countTotalLike($idCandidate)
    {
        $count = CandidateLike::where('candidate_id', $idCandidate)->count();

        return $count;
    }
    public function perpageCandidateLike($numberload)
    {
        $perpage = $numberload*self::NUMBER_CANDIDATE_LIKE;

        return $perpage;
    }
    public function listLike($numberload,$idCandidate)
    {
        $perpage = $this->perpageCandidateLike($numberload);
        $result = CandidateLike::where('candidate_id', $idCandidate)->offset(0)->limit($perpage)->get();

        return $result;
    }
}
