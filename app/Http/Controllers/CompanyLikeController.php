<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\CompanyLike;
use Illuminate\Support\Facades\Auth;
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
    public function getListLikeCompany($numberload)
    {
        $id = Auth::user()->id;
        $company = Company::where('user_id', $id)->first();
        $companyLike = new CompanyLike();
        $idCompany = $company['id'];
        $count = $companyLike->countTotalLike($idCompany);
        $result = $companyLike->listLike($numberload, $idCompany);
        $perpage = $companyLike->perpageCompanyLike($numberload);

        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
}
