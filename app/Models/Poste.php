<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id', 
        'user_id', 
        'user_role', 
        'description', 
        'confirmed', 
        'start_hour', 
        'end_hour', 
        'start_day', 
        'end_day',
        'nbr_children',
        'pricing_per_hour',
        'rating'
    ];
}


