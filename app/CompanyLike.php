<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Company;

class CompanyLike extends Model
{
    const NUMBER_COMPANY_LIKE = 10;

    protected $table = 'company_like';
    protected $fillable = [
        'company_id',
        'candidate_id',
        'status'
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function addCompanyLike($input)
    {
        return CompanyLike::create($input);
    }
    public function countTotalLike($idCompany)
    {
        $count = CompanyLike::where('company_id', $idCompany)->count();

        return $count;
    }
    public function perpageCompanyLike($numberload)
    {
        $perpage = $numberload*self::NUMBER_COMPANY_LIKE;

        return $perpage;
    }
    public function listLike($numberload, $idCompany)
    {
        $perpage = $this->perpageCompanyLike($numberload);
        $result = CompanyLike::where('company_id', $idCompany)->offset(0)->limit($perpage)->get();

        return $result;
    }
}
