<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class CompanyLike extends Model
{
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
}
