<?php

namespace Database\Seeders;

use App\Models\Settings\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    private function data() {
        return [
            [
                'order'     => 1,
                'name'      => 'Clínica',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 2,
                'name'      => 'Pacientes',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 3,
                'name'      => 'Farmacia',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 4,
                'name'      => 'Reportes',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
            [
                'order'     => 5,
                'name'      => 'Configuración',
                'icon'      => null,
                'color'     => null,
                'is_active' => true
            ],
        ];
    }

    public function run(): void
    {
        $menus = $this->data();
        foreach ($menus as $menu) {
            Menu::firstOrCreate($menu);
        }
    }
}
