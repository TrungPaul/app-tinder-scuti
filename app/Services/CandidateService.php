<?php

namespace App\Services;

use App\Candidate;
use App\Condition;
use App\Contact;
use App\User;
use App\CompanyLike;
use App\Company;
use App\DisLikeCompany;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\CandidateServiceInterface;

class CandidateService implements CandidateServiceInterface
{
    const NUMBERCANDIDATE = 10;

    public function getTotalNumberCandidate()
    {
        $count = Candidate::all()->count();

        return $count;
    }
    public function getListLike()
    {
        $id = Auth::user()->id;
        $user = User::with('company')->find($id)->toArray();
        $company = Company::where('user_id', $id)->first();
        $idCompany = $company['id'];
        $usersLikeAndDislike = CompanyLike::where('company_id', $idCompany)->get();
        $companyLike = $usersLikeAndDislike->pluck('candidate_id');

        return $companyLike;
    }
    public function getListDislike()
    {
        $id = Auth::user()->id;
        $user = User::with('company')->find($id)->toArray();
        $company = Company::where('user_id', $id)->first();
        $idCompany = $company['id'];
        $usersLikeAndDislike = DisLikeCompany::where('company_id', $idCompany)->get();
        $companyDislike = $usersLikeAndDislike->pluck('candidate_id');

        return $companyDislike;
    }

    public function showListCandidate($numberload, $request)
    {
        $companyLike = $this->getListLike();
        $companyDislike = $this->getListDislike();
        $perpage = $this->perpageCandidate($numberload);
        $exceptCandidate = $this->getListLike();
        if (($request->location == null) && ($request->job==null)) {
            $result = Candidate::whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->offset(0)->limit($perpage)->get();
        } elseif (($request->location != null) && ($request->job==null)) {
            $result = Candidate::where('location', 'like', $request->location)->whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->offset(0)->limit($perpage)->get();
        } elseif (($request->location == null) && ($request->job != null)) {
            $result = Candidate::where('job', 'like', $request->job)->whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->offset(0)->limit($perpage)->get();
        } else {
            $result = Candidate::where('location', 'like', $request->location)->whereNotIn('id', $companyLike)->whereNotIn('id', $companyDislike)->where('job', 'like', $request->job)->offset(0)->limit($perpage)->get();
        }
        $result = $result->load('conditions');
        $result = $result->load('contacts');

        return $result;
    }

    public function detailShowCandidate($id)
    {
        $detailCandidate = Candidate::find($id);

        return $detailCandidate;
    }

    public function perpageCandidate($numberload)
    {
        $perpage = $numberload*self::NUMBERCANDIDATE;

        return $perpage;
    }
}
