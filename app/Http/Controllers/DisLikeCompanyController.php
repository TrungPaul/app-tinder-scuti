<?php

namespace App\Http\Controllers;

use App\DislikeCompany;
use Illuminate\Http\Request;
use Validator;

class DisLikeCompanyController extends Controller
{
    public function addDislike(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required',
            'candidate_id' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $companyLike = new DislikeCompany;
        $like = $companyLike->addCompanyDislike($input);

        return response()->json($like);
    }
}
