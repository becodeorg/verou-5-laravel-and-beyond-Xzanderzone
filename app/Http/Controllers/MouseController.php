<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mouse;


class MouseController extends Controller
{
  public function index()
  {
    return view("mice.index",['mice'=>Mouse::all()]);
  }
  public function showMouseSorted($type)
  {
    return view("mice.index",['mice'=>Mouse::all ()->sortByDesc($type)]);
  }

  public function show(Mouse $mouse)
  {
    return view("mice.show",['mouse'=>$mouse]);
  }
}