<?php

namespace App\Http\Controllers;

use App\Image;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
  public function index(Request $request)
  {
    $properties = Property::find(1);
    $images = $properties->images;
    $image = $images->find(2);

    return view('tkestate.index', ['pro'=>$properties, 'image' => $image]);
  }
}
