<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipmodel;
use App\Models\Ship;

class ShipController extends Controller
{
    //
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['name', 'captain', 'length', 'capacity_teu', 'year_built', 'shipmodel_id'];
    protected $validation = [
        'name' => 'required',
        'captain' => 'required',
        'length' => 'required',
        'capacity_teu' => 'required',
        'year_built' => 'required',
        'shipmodel_id' => 'required'
    ];

    public function getAdd()
    {
        $shipmodels = Shipmodel::all();
        return view('ships.add', compact('shipmodels'));
    }

    public function getEdit($id)
    {
        $ship = Ship::findOrFail($id);
        $shipmodels = Shipmodel::all();
        return view('ships.edit', compact('ship', 'shipmodels'));
    }
}
