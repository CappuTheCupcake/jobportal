<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // gets all users
        $users = User::all();

        $companies = [
            [
                'user_id' => $users[0]->id, 
                'name' => 'TechCorp GmbH',
                'description' => 'Innovative Softwarelösungen für Unternehmen'
            ],
            [
                'user_id' => $users[1]->id, 
                'name' => 'MarketingPro AG',
                'description' => 'Digitale Marketingstrategien und Beratung'
            ],
            [
                'user_id' => $users[2]->id, 
                'name' => 'DesignStudio Creative',
                'description' => 'Kreative Designlösungen für Marken'
            ],
            [
                'user_id' => $users[3]->id, 
                'name' => 'Finance Solutions',
                'description' => 'Finanzberatung und Buchhaltung'
            ],
            [
                'user_id' => $users[4]->id, 
                'name' => 'LogiTech Systems',
                'description' => 'Logistiksoftware und Supply Chain Management'
            ]
        ];

        foreach ($companies as $companyData) {
            Company::create($companyData);
        }
    }
}
