<?php

namespace App\Interfaces;

interface CandidateServiceInterface
{
    public function count();
    public function show($perpage);
    public function detailShow($id);
    public function perpage($numberload);
}
