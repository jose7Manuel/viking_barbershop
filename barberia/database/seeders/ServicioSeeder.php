<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['titulo'=>'Corte clásico','descripcion'=>'Corte tradicional masculino con acabado a tijera y navaja.','imagen'=>null],
            ['titulo'=>'Corte moderno','descripcion'=>'Estilos modernos, degradados y diseño en cabecera.','imagen'=>null],
            ['titulo'=>'Afeitado premium','descripcion'=>'Afeitado con toalla caliente y productos premium.','imagen'=>null],
            ['titulo'=>'Barba y perfilado','descripcion'=>'Limpieza y diseño de barba con navaja.','imagen'=>null],
        ];

        foreach($items as $it){
            Servicio::create($it);
        }
    }
}
