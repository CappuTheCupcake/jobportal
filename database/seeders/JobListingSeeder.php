<?php

namespace Database\Seeders;

use App\Models\JobListing;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $companies = Company::all();
        $categories = Category::all();

        $jobListings = [
            [
                'company_id' => $companies->where('name', 'MarketingPro AG')->first()->id,
                'category_id' => $categories->where('name', 'Marketing')->first()->id,
                'title' => 'Marketing Manager',
                'description' => 'Verantwortlich für digitale Marketingkampagnen und Markenentwicklung. Anforderungen: Marketing-Studium, 2+ Jahre Erfahrung, Social Media Kenntnisse. Gehalt: 45.000 - 60.000€, Standort: Hamburg, Vollzeit.'
            ],
            [
                'company_id' => $companies->where('name', 'DesignStudio Creative')->first()->id,
                'category_id' => $categories->where('name', 'Design')->first()->id,
                'title' => 'UI/UX Designer',
                'description' => 'Kreativer Designer für moderne Web- und Mobile-Anwendungen. Anforderungen: Figma, Adobe Creative Suite, Portfolio, 2+ Jahre Erfahrung. Gehalt: 40.000 - 55.000€, Standort: München, Vollzeit.'
            ],
            [
                'company_id' => $companies->first()->id,
                'category_id' => $categories->where('name', 'Softwareentwicklung')->first()->id,
                'title' => 'Senior Softwareentwickler (TypeScript/React)',
                'description' => 'Wir suchen einen erfahrenen Softwareentwickler mit Typescript und React-Kenntnissen für spannende Projekte. Anforderungen: Typescript, React, Node.js, Git, 3+ Jahre Erfahrung. Gehalt: 60.000 - 80.000€, Standort: Berlin, Vollzeit.'
            ],
            [
                'company_id' => $companies->where('name', 'Finance Solutions')->first()->id,
                'category_id' => $categories->where('name', 'Finanzen')->first()->id,
                'title' => 'Buchhalter (m/w/d)',
                'description' => 'Verantwortlich für die Finanzbuchhaltung und Jahresabschlüsse. Anforderungen: Buchhalter-Ausbildung, DATEV-Kenntnisse, 3+ Jahre Erfahrung. Gehalt: 35.000 - 48.000€, Standort: Frankfurt, Vollzeit.'
            ],
            [
                'company_id' => $companies->where('name', 'LogiTech Systems')->first()->id,
                'category_id' => $categories->where('name', 'Logistik')->first()->id,
                'title' => 'Logistik-Controller',
                'description' => 'Optimierung von Lieferketten und logistischen Prozessen. Anforderungen: Logistik-Studium, SAP-Kenntnisse, analytisches Denken. Gehalt: 42.000 - 58.000€, Standort: Düsseldorf, Vollzeit.'
            ]
        ];

        foreach ($jobListings as $jobData) {
            JobListing::create($jobData);
        }
    }
}
