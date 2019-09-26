<?php

namespace App\Http\Controllers;

use App\Services\CandidateService;
use App\User;
use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;
use App\Providers\CandidateServiceProvider;
use App\Interfaces\CandidateServiceInterface;
use App\Condition;
use App\Contact;

class CandidateController extends BaseController
{
    public function __construct(CandidateServiceInterface  $candidateService)
    {
        $this->candidateService = $candidateService;
    }
    public function getTotalNumberCandidate($numberload, Request $request)
    {
        $count = $this->candidateService->getTotalNumberCandidate();
        $result = $this->candidateService->showListCandidate($numberload, $request);
        $perpage = $this->candidateService->perpageCandidate($numberload);

        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
    public function detailShowCandidate($id)
    {
        $detailShow = $this->candidateService->detailShowCandidate($id);

        return response($detailShow);
    }
    public function addInfoCandidate(Request $request)
    {
        $newCandidate = new Candidate();
        $addInfoCandidate = $newCandidate->infoCandidate($request);

        return response()->json('update successfull', 200);
    }
}
