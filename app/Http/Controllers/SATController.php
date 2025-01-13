<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SATController extends Controller
{
    public function index()
    {
        $Datos = DB::table('InventarioGeneral')
                    ->select('*')
                    ->get();

        return view('SAT',[
            'Datos' => $Datos
        ]);
    }
}
