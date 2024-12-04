<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    //
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['name', 'captain', 'length', 'capacity_teu', 'year_built'];
    protected $validation = [
        'name' => 'required'
    ];
}
