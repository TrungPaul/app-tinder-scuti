<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidate;

class DisLikeCompany extends Model
{
    const NUMBER_COMPANY_DISLIKE = 10;
    protected $table = 'company_dislike';
    protected $fillable = [
        'company_id',
        'candidate_id',
        'status'
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function addCompanyDislike($input)
    {
        return DisLikeCompany::create($input);
    }
    public function countTotalDisLike($idCompany)
    {
        $count = DislikeCompany::where('company_id', $idCompany)->count();
        
        return $count;
    }
    public function perpageCompanyDislike($numberload)
    {
        $perpage = $numberload*self::NUMBER_COMPANY_DISLIKE;

        return $perpage;
    }
    public function listDislike($numberload, $idCompany)
    {
        $perpage = $this->perpageCompanyDislike($numberload);
        $arrayCompanyId = DislikeCompany::select('candidate_id')->where('company_id', $idCompany)->offset(0)->limit($perpage)->get()->pluck('candidate_id')->toArray();
        $company = Company::whereIn('id', $arrayCompanyId)->get();

        return $company;
    }
}
