<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Získá akce, které již proběhly
        $events = DB::table('event')
            ->where('date', '<', Carbon::now())
            ->get();

        return view('home.home', ['events' => $events]);
    }
}
