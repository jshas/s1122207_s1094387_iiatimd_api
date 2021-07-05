<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index(){
        $medicine = Medicine::all();
        return $medicine;
    }

    public function show($id){
        $medicine = Medicine::find($id);
        return $medicine;

    }
}
