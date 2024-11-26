<?php

namespace App\Services;

use Supabase\CreateClient;

class SupabaseService
{
    protected $supabase;

    public function __construct()
    {
        $url = env('SUPABASE_URL');
        $key = env('SUPABASE_KEY');

        if (!$url || !$key) {
            throw new \Exception('Las variables de entorno SUPABASE_URL y SUPABASE_KEY no están configuradas.');
        }

        $this->supabase = new CreateClient($url, $key);
    }

    public function getClient()
    {
        return $this->supabase;
    }
}
