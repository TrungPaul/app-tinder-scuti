<?php

namespace App\Http\Controllers;

use App\DislikeCandidate;
use Illuminate\Http\Request;
use Validator;
use App\Candidate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController as BaseController;

class DislikeCandidateController extends BaseController
{
    public function addDislike(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'candidate_id' => 'required',
            'company_id' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $candidateLike = new DislikeCandidate;
        $like = $candidateLike->addCandidateDislike($input);

        return response()->json($like);
    }
    public function getListDislikeCandidate($numberload)
    {
        $id = Auth::user()->id;
        $candidate = Candidate::where('user_id', $id)->first();
        $candidateDislike = new DislikeCandidate();
        $idCandidate = $candidate['id'];
        $count = $candidateDislike->countTotalDisLike($idCandidate);
        $result = $candidateDislike->listDislike($numberload,$idCandidate);
        $perpage = $candidateDislike->perpageCandidateDislike($numberload);

        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
}
