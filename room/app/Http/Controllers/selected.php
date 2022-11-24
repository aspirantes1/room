<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class selected extends Controller
{
    public function select()
    {
    $rooms = DB::table('rooms')->paginate(15);
    return view('room', ['rooms' => $rooms]);
}
}
