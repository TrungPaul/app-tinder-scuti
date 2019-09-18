<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\CandidateLike;
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
        if ($validator->fails())
        {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $candidateLike = new CandidateLike;
        $like = $candidateLike->addCandidateLike($input);
        return response()->json($like);
    }
}
