<?php

namespace App\Http\Controllers;

use App\Http\Resources\CodigoPostalResource;
use App\Http\Resources\EstadoResource;
use App\Http\Resources\MunicipioResource;
use App\Models\CodigoPostal;
use Illuminate\Http\JsonResponse;

class APICodigosPostalesController extends Controller
{
    /**
     * Obtiene el listado de todos los estados únicos.
     */
    public function estados(): JsonResponse
    {
        $estados = CodigoPostal::query()
            ->select('estado', 'clave_estado')
            ->distinct()
            ->orderBy('estado')
            ->get();

        return EstadoResource::collection($estados)->response();
    }

    /**
     * Obtiene el listado de municipios según el estado consultado.
     */
    public function municipios(string $estado): JsonResponse
    {
        $query = CodigoPostal::query();

        if (is_numeric($estado)) {
            $query->where('clave_estado', (int) $estado);
        } else {
            $query->where('estado', $estado);
        }

        $municipios = $query
            ->select('municipio', 'clave_municipio', 'clave_estado')
            ->distinct()
            ->orderBy('municipio')
            ->get();

        if ($municipios->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron municipios para el estado proporcionado.',
                'estado' => $estado,
            ], 404);
        }

        return MunicipioResource::collection($municipios)->response();
    }

    /**
     * Obtiene códigos postales por código postal específico.
     */
    public function show(string $codigo_postal): JsonResponse
    {
        $codigosPostales = CodigoPostal::where('codigo_postal', $codigo_postal)->get();

        if ($codigosPostales->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron códigos postales para el código proporcionado.',
                'codigo_postal' => $codigo_postal,
            ], 404);
        }

        return CodigoPostalResource::collection($codigosPostales)->response();
    }
}
