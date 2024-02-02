<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Models\Mouse;
use App\Models\post;


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
    $posts=post::with("mice")->where("product_type","mice")->where("product_id",$mouse->id)->get();
    return view("mice.show",['mouse'=>$mouse,'posts'=>$posts]);
  }
}