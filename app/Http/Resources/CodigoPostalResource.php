<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CodigoPostalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'codigo_postal' => $this->codigo_postal,
            'nombre' => $this->nombre,
            'tipo' => $this->tipo,
            'municipio' => $this->municipio,
            'estado' => $this->estado,
            'clave_estado' => $this->clave_estado,
            'clave_municipio' => $this->clave_municipio,
            'clave_localidad' => $this->clave_localidad,
            'zona' => $this->zona,
        ];
    }
}
