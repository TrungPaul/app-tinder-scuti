<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    public function showCandidate($numberload)
    {
        $perpage = $numberload*10;
        $candidate = DB::table('candidates')->paginate($perpage);
        return response($candidate);
    }
    public function detailCandidate($id)
    {
        return response(Candidate::find($id));
    }
}
