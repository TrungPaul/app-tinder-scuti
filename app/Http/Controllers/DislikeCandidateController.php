<?php

namespace App\Http\Controllers;

use App\DislikeCandidate;
use Illuminate\Http\Request;
use Validator;
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
}
