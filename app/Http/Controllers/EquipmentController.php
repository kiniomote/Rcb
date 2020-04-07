<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    function index() {
        $equipments = Equipment::orderBy('created_at', 'desc')->paginate(10);
        return view('equipment', compact('equipments'));
    }
}
