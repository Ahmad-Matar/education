<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoriesController extends Controller
{
    public function index(){
       // $data = Catagory::all();
        return view('index');
    }
    //
}
