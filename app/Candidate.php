<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $fillable = [
        'name',
        'nationality',
        'gender',
        'DoB',
        'contact_id',
        'current_add',
        'request',
        'exp',
        'location',
        'condition_id',
        'user_id',
        'candidate_like_id',
        'candidate_dislike_id'
    ];
}
