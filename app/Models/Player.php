<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Player extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'username',
        'mobile',
        'email_verified_at',
        'age',
        'nationality',
        'skillset',
        'country',
        'base_price',
        'identity_proof_number',
        'image_link',
        'total_matches',
        'total_innings',
        'total_runs',
        'total_wickets',
        'hundreds',
        'fifties',
        'fifer',
        'economy',
        'strike_rate',
        'verified',
        'sold',
        'added_for_auction',
        'sold_price',
        'team_id',

    ];
}
