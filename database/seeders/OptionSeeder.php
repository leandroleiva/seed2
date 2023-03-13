<?php

namespace Database\Seeders;

use App\Models\Settings\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    private function data() {
        return [
            // Clinic
            [
                'order'     => 1,
                'menu_id'   => 1,
                'name'      => 'Atenciones',
                'route'     => 'clinic.consultations.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 2,
                'menu_id'   => 1,
                'name'      => 'Hospitalizaciones',
                'route'     => 'clinic.hospitalizations.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 3,
                'menu_id'   => 1,
                'name'      => 'Cirujías',
                'route'     => 'clinic.surgeries.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 4,
                'menu_id'   => 1,
                'name'      => 'Cotizaciones',
                'route'     => 'clinic.quotes.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            // Pacientes
            [
                'order'     => 1,
                'menu_id'   => 2,
                'name'      => 'Fichas clínicas',
                'route'     => 'patients.records.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 3,
                'menu_id'   => 2,
                'name'      => 'Studs',
                'route'     => 'patients.studs.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            // Farmacia
            [
                'order'     => 1,
                'menu_id'   => 3,
                'name'      => 'Inventario',
                'route'     => 'pharmacy.inventory.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 2,
                'menu_id'   => 3,
                'name'      => 'Proveedores',
                'route'     => 'pharmacy.suppliers.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 3,
                'menu_id'   => 3,
                'name'      => 'Tipos de insumos',
                'route'     => 'pharmacy.supplies.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            // Reportes
            [
                'order'     => 1,
                'menu_id'   => 4,
                'name'      => 'Exportar a Excel',
                'route'     => 'reports.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            // Configuración
            [
                'order'     => 1,
                'menu_id'   => 5,
                'name'      => 'Usuarios',
                'route'     => 'settings.users.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 2,
                'menu_id'   => 5,
                'name'      => 'Roles',
                'route'     => 'settings.roles.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 3,
                'menu_id'   => 5,
                'name'      => 'Menú',
                'route'     => 'settings.menus.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 4,
                'menu_id'   => 5,
                'name'      => 'Valores del sistema',
                'route'     => 'settings.parameters.index',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
        ];
    }

    public function run(): void
    {
        $options = $this->data();
        foreach ($options as $option) {
            Option::firstOrCreate($option);
        }
    }
}
