<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function showCompany($numberload)
    {
        $perpage = $numberload*10;
        $company = DB::table('companies')->paginate($perpage);
        return response($company);
    }
    public function detailCompany($id)
    {
        return response(Company::find($id));
    }
}
