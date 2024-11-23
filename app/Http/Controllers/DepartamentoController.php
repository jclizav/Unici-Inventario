<?php

namespace App\Http\Controllers;

use App\Services\SupabaseService;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    protected $supabase;

    public function __construct(SupabaseService $supabase)
    {
        $this->supabase = $supabase->getClient();
    }

    public function index()
    {
        $response = $this->supabase->from('departamento')->select('*')->execute();
        $departamentos = $response->json()['data'] ?? [];

        return view('departamento', compact('departamentos'));
    }
}
