<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ManufacturerController extends Controller
{   
    protected $className = 'App\Models\Manufacturer';
    protected $entityName = 'manufacturers';
    protected $fields = ['name'];
    protected $validation = [
        'name' => 'required'
    ];
}
