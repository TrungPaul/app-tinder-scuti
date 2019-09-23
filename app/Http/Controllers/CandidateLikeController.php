<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\CandidateLike;
use Illuminate\Support\Facades\Auth;
use Validator;

class CandidateLikeController extends BaseController
{
    public function addLike(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'candidate_id' => 'required',
            'company_id' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $candidateLike = new CandidateLike;
        $like = $candidateLike->addCandidateLike($input);

        return response()->json($like);
    }
    public function getListLikeCandidate($numberload)
    {
        $id = Auth::user()->id;
        $candidate = Candidate::where('user_id', $id)->first();
        $idCandidate = $candidate['id'];
        $count = (new \App\CandidateLike)->countTotalLike($idCandidate);
        $result = (new \App\CandidateLike)->listLike($numberload,$idCandidate);
        $perpage = (new \App\CandidateLike)->perpageCandidateLike($numberload);

        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
}
