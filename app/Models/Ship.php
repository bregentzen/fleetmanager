<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $fillable = [
        'ship_name',
        'captain',
        'length',
        'capacity_teu',
        'year_built',
    ];
}