<?php

namespace App\Interfaces;

interface CandidateServiceInterface
{
    public function getTotalNumberCandidate();
    public function showListCandidate($perpage, $request);
    public function detailShowCandidate($id);
    public function perpageCandidate($numberload);
}
