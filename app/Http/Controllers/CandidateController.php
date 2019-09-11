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
        $count = $this->candidateService->count();
        $result = $this->candidateService->show($numberload);
        $perpage = $this->candidateService->perpage($numberload);
        return $this->sendResponse($result->toArray(), $count , $perpage);
    }
    public function detailCandidate($id)
    {
        $detailShow = $this->candidateService->detailShow($id);
        return response($detailShow);
    }
}
