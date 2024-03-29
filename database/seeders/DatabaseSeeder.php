<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory()->create(
            [
                'type_id' => 1,
                'name' => 'Gaji'
            ]
        );
        Category::factory()->create(
            [
                'type_id' => 1,
                'name' => 'Investasi'
            ]
        );
        Category::factory()->create(
            [
                'type_id' => 1,
                'name' => 'Deposito'
            ]
        );
        Category::factory()->create(
            [
                'type_id' => 2,
                'name' => 'Makan'
            ]
        );
        Category::factory()->create(
            [
                'type_id' => 2,
                'name' => 'Belanja'
            ]
        );
        Category::factory()->create(
            [
                'type_id' => 2,
                'name' => 'Sewa Rumah'
            ]
        );

        Type::factory()->create([
            'name' => "Pemasukan",

        ]);
        Type::factory()->create([
            'name' => "Pengeluaran",
        ]);
    }
}
