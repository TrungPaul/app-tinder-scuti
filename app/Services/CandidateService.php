<?php

namespace App\Services;

use App\Candidate;
use App\Interfaces\CandidateServiceInterface;

class CandidateService implements CandidateServiceInterface
{
    public function count()
    {
        $count = Candidate::all()->count();
        return $count;
    }

    public function show($numberload)
    {
        $perpage = $this->perpage($numberload);
        $result = Candidate::offset(0)->limit($perpage)->get();
        return $result;
    }

    public function detailShow($id)
    {
        $detailCandidate = Candidate::find($id);
        return $detailCandidate;
    }

    public function perpage($numberload)
    {
        $perpage = $numberload*10;
        return $perpage;
    }
}
