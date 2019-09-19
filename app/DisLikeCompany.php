<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisLikeCompany extends Model
{
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
}
