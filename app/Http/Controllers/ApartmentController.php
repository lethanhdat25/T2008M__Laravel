<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    function all(){
        $apartment=Apartment::paginate(6);
        return view("apartment",["apartment"=>$apartment]);
    }
}
