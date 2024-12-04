<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Shipmodel;

class ShipmodelController extends Controller
{
    //
    protected $className = 'App\Models\Shipmodel';
    protected $entityName = 'shipmodels';
    protected $fields = ['name', 'manufacturer_id'];
    protected $validation = [
        'name' => 'required',
        'manufacturer_id' => 'required'
    ];

    public function getShow($id)
    {
        $entity = Shipmodel::with('manufacturer')->findOrFail($id);
        return view('shipmodels.show', compact('entity'));
    }

    public function getAdd()
    {
        $manufacturers = Manufacturer::all();
        return view('shipmodels.add', compact('manufacturers'));
    }

    public function getEdit($id)
    {
        $shipmodel = Shipmodel::findOrFail($id);
        $manufacturers = Manufacturer::all();
        return view('shipmodels.edit', compact('shipmodel', 'manufacturers'));
    }
}
