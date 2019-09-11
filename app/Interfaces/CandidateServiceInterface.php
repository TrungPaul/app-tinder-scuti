<?php

namespace App\Interfaces;

interface CandidateServiceInterface
{
    public function getTotalNumberCandidate();
    public function show($perpage);
    public function detailShow($id);
    public function perpage($numberload);
}
