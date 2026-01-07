<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Galon
            [
                'name' => 'Aqua Galon 19L',
                'description' => 'Air mineral berkualitas dalam kemasan galon 19 liter. Telah melalui proses penyaringan berlapis untuk menjamin kesegaran dan kesehatan.',
                'price' => 25000,
                'stock' => 100,
                'category' => 'galon',
                'is_active' => true,
            ],
            [
                'name' => 'Le Minerale Galon 19L',
                'description' => 'Air mineral alami dari sumber pegunungan dengan kandungan mineral yang seimbang. Kemasan galon 19 liter.',
                'price' => 22000,
                'stock' => 80,
                'category' => 'galon',
                'is_active' => true,
            ],
            [
                'name' => 'Vit Galon 19L',
                'description' => 'Air minum dalam kemasan (AMDK) dengan kualitas terjamin. Cocok untuk kebutuhan keluarga sehari-hari.',
                'price' => 20000,
                'stock' => 120,
                'category' => 'galon',
                'is_active' => true,
            ],
            [
                'name' => 'Cleo Galon 19L',
                'description' => 'Air mineral dengan kandungan oksigen tinggi. Menyegarkan dan menyehatkan untuk seluruh keluarga.',
                'price' => 23000,
                'stock' => 90,
                'category' => 'galon',
                'is_active' => true,
            ],

            // Dispenser
            [
                'name' => 'Dispenser Hot & Cold',
                'description' => 'Dispenser dengan fitur air panas dan dingin. Hemat energi dengan sistem pemanas dan pendingin efisien.',
                'price' => 850000,
                'stock' => 15,
                'category' => 'dispenser',
                'is_active' => true,
            ],
            [
                'name' => 'Dispenser Hot & Normal',
                'description' => 'Dispenser praktis dengan fitur air panas dan normal. Cocok untuk kantor dan rumah tangga.',
                'price' => 650000,
                'stock' => 20,
                'category' => 'dispenser',
                'is_active' => true,
            ],
            [
                'name' => 'Dispenser Galon Bawah',
                'description' => 'Dispenser model galon bawah, lebih mudah dan praktis untuk memasang galon. Design modern dan elegan.',
                'price' => 750000,
                'stock' => 12,
                'category' => 'dispenser',
                'is_active' => true,
            ],

            // Pompa
            [
                'name' => 'Pompa Galon Manual',
                'description' => 'Pompa galon manual yang praktis dan mudah digunakan. Cocok untuk rumah atau kantor.',
                'price' => 25000,
                'stock' => 50,
                'category' => 'pompa',
                'is_active' => true,
            ],
            [
                'name' => 'Pompa Galon Elektrik',
                'description' => 'Pompa galon elektrik dengan baterai rechargeable. Otomatis dan lebih praktis. USB charging.',
                'price' => 85000,
                'stock' => 30,
                'category' => 'pompa',
                'is_active' => true,
            ],
            [
                'name' => 'Pompa Galon Elektrik Premium',
                'description' => 'Pompa galon elektrik premium dengan touch sensor dan LED display. Anti tumpah dengan sensor otomatis.',
                'price' => 125000,
                'stock' => 25,
                'category' => 'pompa',
                'is_active' => true,
            ],

            // Accessories
            [
                'name' => 'Tutup Galon Stainless',
                'description' => 'Tutup galon berbahan stainless steel, higienis dan tahan lama. Melindungi air dari kontaminasi.',
                'price' => 15000,
                'stock' => 60,
                'category' => 'accessories',
                'is_active' => true,
            ],
            [
                'name' => 'Rak Galon 2 Susun',
                'description' => 'Rak penyimpanan galon dengan kapasitas 2 galon. Bahan besi kuat dan cat anti karat.',
                'price' => 150000,
                'stock' => 20,
                'category' => 'accessories',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
