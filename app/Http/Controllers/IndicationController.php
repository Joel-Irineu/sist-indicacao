<?php

namespace App\Http\Controllers;

use App\Models\indication;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    public function index(){
        $indications = Indication::get();
        return view('indications.list', ['indications' => $indications]);
    }

    public function new(){
        return view('indications.form');
    }
}
