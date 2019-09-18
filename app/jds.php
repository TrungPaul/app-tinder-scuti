<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jds extends Model
{
    protected $table = 'jds';
    protected $fillable = [
        'job_title',
        'position',
        'rank_salary',
        'skill_set'
    ];
    public function company()
    {
        return $this->hasOne('App\Company', 'company_id', 'id');
    }
}
