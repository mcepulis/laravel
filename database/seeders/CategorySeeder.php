<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => fake()->name,
                'enabled' => fake()->boolean(),
                // 'updated_at' => fake()->dateTime(),
                // 'created_at' => fake()->dateTime(),
            ]);
        }
    }
}
