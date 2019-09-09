<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'current_working',
        'main_business',
        'company_size',
        'contact_id',
        'jd_id',
        'location',
        'job_title',
        'position',
        'salary_rank',
        'summary_company',
        'language_skill',
        'other_skill',
        'regime_treatment',
        'condition_id',
        'user_id',
        'company_like_id',
        'company_dislike_id'
    ];
}

