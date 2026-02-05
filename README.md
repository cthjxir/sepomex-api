# SEPOMEX API

API REST en Laravel para consultar informacion de codigos postales de Mexico (SEPOMEX) desde una tabla `sepomex`. Permite obtener estados, municipios y detalles de colonias/codigos postales mediante endpoints de solo lectura.

## Funcionalidad
- Listar estados unicos con su clave y el total de municipios.
- Buscar municipios por estado usando nombre parcial o clave numerica.
- Consultar colonias/codigos postales por codigo postal exacto.
- Consultar codigos postales por municipio usando nombre parcial o clave numerica.

## Endpoints
- `GET /api/estados` devuelve una lista de estados con `estado`, `clave_estado`, `total_municipios`.
- `GET /api/municipios/{estado}` acepta nombre parcial o `clave_estado` numerica y devuelve `municipio`, `clave_municipio`, `clave_estado`, `estado`.
- `GET /api/codigos-postales/{codigo_postal}` devuelve colonias/codigos postales con `codigo_postal`, `nombre`, `tipo`, `municipio`, `estado`, `clave_estado`, `clave_municipio`, `clave_localidad`, `zona`.
- `GET /api/codigos-postales/municipio/{municipio}` acepta nombre parcial o `clave_municipio` numerica y devuelve los mismos campos que la consulta por codigo postal.

## Respuestas de error
Cuando no hay resultados, se responde con `404` y un JSON con el mensaje y el parametro consultado.

```json
{
  "message": "No se encontraron codigos postales para el codigo proporcionado.",
  "codigo_postal": "00000"
}
```

## Datos requeridos
La API espera una tabla `sepomex` en la base de datos configurada con, al menos, las siguientes columnas:

- `codigo_postal`
- `nombre`
- `tipo`
- `municipio`
- `estado`
- `clave_estado`
- `clave_municipio`
- `clave_localidad`
- `zona`

## Notas
Las busquedas por `estado` y `municipio` usan coincidencia parcial con `LIKE`, por lo que pueden devolver multiples resultados.

## Instalacion

Requisitos:
- PHP 8.2+ (recomendado 8.4).
- Composer.
- MySQL/MariaDB.

Pasos:
1. Instala dependencias PHP:
   ```bash
   composer install
   ```
2. Crea el archivo de entorno:
   ```bash
   cp .env.example .env
   ```
3. Genera la clave de la aplicacion:
   ```bash
   php artisan key:generate
   ```
4. Configura la base de datos en `.env` (por ejemplo `DB_DATABASE=sepomex_api`).
5. Asegura que exista la tabla `sepomex` y carga los datos (importacion de SEPOMEX) con las columnas indicadas en la seccion **Datos requeridos**.
6. Inicia el servidor:
   - Con Laravel:
     ```bash
     php artisan serve
     ```
   - O con XAMPP: apunta el DocumentRoot a `public/` y accede al proyecto desde Apache.

Una vez en marcha, los endpoints estaran disponibles bajo `/api/...`.
