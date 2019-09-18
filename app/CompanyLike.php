<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class CompanyLike extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function addCompanyLike($input)
    {
        return $like= CompanyLike::create($input);
    }
}
