<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeputadosController extends Controller
{
    public function index()
    {
        $response = Http::get("https://dadosabertos.camara.leg.br/api/v2/deputados");

        if ($response->failed()) {
            return response()->json([
                "error" => true,
                "message" => "Nenhum dado encontrado!",
            ], 500);
        }

        return response()->json([
            "error" => false,
            "message" => "Sucesso!",
            "data" => $response->json()
        ], 200);
    }
}
