<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Pail\ValueObjects\Origin\Console;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // get data order last 7 days

        return view('layouts.master');
    }
}
