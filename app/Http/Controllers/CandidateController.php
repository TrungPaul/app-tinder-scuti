<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;

class CandidateController extends BaseController
{
    public function showCandidate($numberload)
    {
        $perpage = $numberload*10;
        $count = DB::table('candidates')->count();
        $result= DB::table('candidates')->paginate($perpage);
        return $this->sendResponse($result->toArray(), $count,$perpage );
    }

    public function detailCandidate($id)
    {
        return response(Candidate::find($id));
    }
}
