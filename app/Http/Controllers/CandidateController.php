<?php

namespace App\Http\Controllers;

use App\Services\CandidateService;
use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;
use App\Providers\CandidateServiceProvider;
use App\Interfaces\CandidateServiceInterface;

class CandidateController extends BaseController
{
    public function __construct(CandidateServiceInterface  $candidateService)
    {
        $this->candidateService = $candidateService;
    }
    public function getTotalNumberCandidate($numberload)
    {
        $count = $this->candidateService->getTotalNumberCandidate();
        $result = $this->candidateService->showListCandidate($numberload);
        $perpage = $this->candidateService->perpageCandidate($numberload);
        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
    public function detailShowCandidate($id)
    {
        $detailShow = $this->candidateService->detailShowCandidate($id);
        return response($detailShow);
    }
}
