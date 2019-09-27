<?php

namespace App\Http\Controllers;

use App\DislikeCompany;
use Illuminate\Http\Request;
use Validator;
use App\Company;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController as BaseController;

class DisLikeCompanyController extends BaseController
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
    public function getListDislikeCompany($numberload)
    {
        $id = Auth::user()->id;
        $company = Company::where('user_id', $id)->first();
        $companyDislike = new DislikeCompany();
        $idCompany = $company['id'];
        $count = $companyDislike->countTotalDisLike($idCompany);
        $result = $companyDislike->listDislike($numberload, $idCompany);
        $perpage = $companyDislike->perpageCompanyDislike($numberload);
        
        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
}
