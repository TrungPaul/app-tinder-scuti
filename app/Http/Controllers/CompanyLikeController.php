<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\CompanyLike;
use Validator;

class CompanyLikeController extends Controller
{
    public function addLike(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required',
            'candidate_id' => 'required',          
            'status' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $companyLike = new CompanyLike;
        $like = $companyLike->addCompanyLike($input);
        return response()->json($like);
    }
}
