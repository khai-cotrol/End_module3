<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    function index(){
        $status = Status::all();
        return view('shop.list',compact('status'));
    }
}
