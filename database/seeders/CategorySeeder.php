<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Softwareentwicklung',
            'Marketing',
            'Verkauf',
            'Design',
            'Administration',
            'Kundenservice',
            'Forschung & Entwicklung',
            'Finanzen',
            'Personalwesen',
            'Logistik'
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'description' => 'Beschreibung für ' . $categoryName
            ]);
        }
    }
}
