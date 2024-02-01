<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keyboard;


class KeyboardController extends Controller
{
  public function index()
  {
    return view("keyboards.index",['keyboards'=>Keyboard::all ()]);
  }
   public function showSorted($type)
  {
    return view("keyboards.index",['keyboards'=>Keyboard::all ()->sortByDesc($type)]);
  }
  
  public function show(Keyboard $keyboard)
  {
    return view("keyboards.show",['keyboard'=>$keyboard]);
  }
}