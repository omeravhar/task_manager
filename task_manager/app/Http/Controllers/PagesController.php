<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public static function showMainPage(){
//        return date("Y-m-d H:i:s");
        return view("content");
    } 
}
