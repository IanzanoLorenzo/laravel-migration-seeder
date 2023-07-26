<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function todaysTrain(){
        $data = date('Y-m-d');
        $trains = Train::where('data_partenza', '=', $data)->get();
        return view('todays-trains', compact('trains', 'data'));
    }
}
