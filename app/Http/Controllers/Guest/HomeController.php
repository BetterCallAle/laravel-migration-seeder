<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_time', date('Y-m-d'))->get();
        dd($trains);
        return view('home.index');
    }
}
