<?php

namespace App\Services;

use App\Company;
use App\Contact;
use App\Jds;
use App\User;
use App\CandidateLike;
use App\Candidate;
use App\DislikeCandidate;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\CompanyServiceInterface;

class CompanyService implements CompanyServiceInterface
{
    public function getTotalNumberCompany()
    {
        $count = Company::all()->count();
        return $count;
    }
    public function getListLike()
    {
        $id = Auth::user()->id;
        $user = User::with('candidates')->find($id)->toArray();
        $candidate = Candidate::where('user_id', $id)->first();
        $idCandidate = $candidate['id'];
        $usersLikeAndDislike = CandidateLike::where('candidate_id', $idCandidate)->get();
        $companyLike = $usersLikeAndDislike->pluck('company_id');

        return $companyLike;
    }
    public function getListDislike()
    {
        $id = Auth::user()->id;
        $user = User::with('candidates')->find($id)->toArray();
        $candidate = Candidate::where('user_id', $id)->first();
        $idCandidate = $candidate['id'];
        $usersLikeAndDislike = DislikeCandidate::where('candidate_id', $idCandidate)->get();
        $companyDislike = $usersLikeAndDislike->pluck('company_id');

        return $companyDislike;
    }
    public function show($numberload, $request)
    {
        $companyLike = $this->getListLike();
        $companyDislike = $this->getListDislike();
        $perpage = $this->perpageCompany($numberload);
        if (($request->location == null) && ($request->main_business==null)) {
            $result = Company::whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->offset(0)->limit($perpage)->get();
        } elseif (($request->location != null) && ($request->main_business==null)) {
            $result = Company::where('location', 'like', $request->location)->whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->offset(0)->limit($perpage)->get();
        } elseif (($request->location == null) && ($request->main_business != null)) {
            $result = Company::where('main_business', 'like', $request->main_business)->whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->offset(0)->limit($perpage)->get();
        } else {
            $result = Company::where('location', 'like', $request->location)->whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->where('main_business', 'like', $request->main_business)->offset(0)->limit($perpage)->get();
        }
        $result = $result->load('jds');
        $result = $result->load('contacts');

        return $result;
    }
    public function detailShow($id)
    {
        $detailCompany = Company::find($id);

        return $detailCompany;
    }
    public function perpageCompany($numberload)
    {
        $numberCompany = 10;
        $perpage = $numberload*$numberCompany;

        return $perpage;
    }
}
