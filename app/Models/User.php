<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
}
