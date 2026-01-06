<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EstadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'estado' => $this->estado,
            'clave_estado' => $this->clave_estado,
            'total_municipios' => (int) $this->total_municipios,
        ];
    }
}
