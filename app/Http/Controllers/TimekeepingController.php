<?php

namespace App\Http\Controllers;
// use App\Employees;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class TimekeepingController extends Controller
{
    public function timekeeping(){
        return view('timekeeping/timekeeping');
    }
}
