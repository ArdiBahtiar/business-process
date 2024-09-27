<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'KODE_BARANG' => Str::random(10),
            'NAMA_BARANG' => fake()->name(),
            'HARGA_BARANG' => fake()->numberBetween($min=10000, $max=20000),
        ];
    }
}
