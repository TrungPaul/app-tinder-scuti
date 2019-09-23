<?php

namespace App\Services;

use App\Candidate;
use App\Condition;
use App\Contact;
use App\Interfaces\CandidateServiceInterface;

class CandidateService implements CandidateServiceInterface
{
    const NUMBERCANDIDATE = 10;

    public function getTotalNumberCandidate()
    {
        $count = Candidate::all()->count();
        return $count;
    }

    public function showListCandidate($numberload)
{
    $perpage = $this->perpageCandidate($numberload);
    $result = Candidate::offset(0)->limit($perpage)->get();
    $result = $result->load('conditions');
    $result = $result->load('contacts');
    return $result;
}

    public function detailShowCandidate($id)
    {
        $detailCandidate = Candidate::find($id);
        return $detailCandidate;
    }

    public function perpageCandidate($numberload)
    {
        $perpage = $numberload*self::NUMBERCANDIDATE;
        return $perpage;
    }
}
