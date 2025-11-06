<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Departamentos;
use App\Models\Empleados;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            DepartamentosSeeder::class,
            EmpleadosSeeder::class,
            CategoriaSeeder::class,
            ProductoSeeder::class,
        ]);
    }
}
