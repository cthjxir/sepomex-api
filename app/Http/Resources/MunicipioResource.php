<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'municipio' => $this->municipio,
            'clave_municipio' => $this->clave_municipio,
            'clave_estado' => $this->clave_estado,
            'estado' => $this->estado,
        ];
    }
}
