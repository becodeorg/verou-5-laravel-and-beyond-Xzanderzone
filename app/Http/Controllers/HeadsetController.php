<?php

namespace App\Http\Controllers;

use App\Models\Headset;
use Illuminate\Http\Request;

class HeadsetController extends Controller
{
    public function index()
  {
    return view("headsets.index",['headsets'=>Headset::all ()]);
  }
   public function showSorted($type)
  {
    return view("headsets.index",['headsets'=>Headset::all ()->sortByDesc($type)]);
  }
  
  public function show(Headset $headset)
  {
    return view("headsets.show",['headset'=>$headset]);
  }
}
