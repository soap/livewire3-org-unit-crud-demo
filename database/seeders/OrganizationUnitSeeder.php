<?php

namespace Database\Seeders;

use App\Models\OrganizationUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = OrganizationUnit::create([
            'name' => 'My Company Ltd.',
            'short_name' => 'MYC',
            'is_company' => true,
        ]);

        $company->children()->create([
            'name' => 'Office of President',
            'short_name' => 'OFP',
            'is_company' => false,
        ]);

        $company->children()->create([
            'name' => 'Human Resource Department',
            'short_name' => 'HRD',
            'is_company' => false,
        ]);

        $company->children()->create([
            'name' => 'Accounting and Finance Department',
            'short_name' => 'AFD',
            'is_company' => false,
        ]);
        $afd = OrganizationUnit::where('short_name', 'AFD')->first();
        $afd->children()->create([
            'name' => 'Accounting Division',
            'short_name' => 'ACD',
            'is_company' => false,
        ]);

        $afd->children()->create([
            'name' => 'Finance Division',
            'short_name' => 'FND',
            'is_company' => false,
        ]);

        $company->children()->create([
            'name' => 'Information Technology Department',
            'short_name' => 'ITD',
            'is_company' => false,
        ]);

        $itd = OrganizationUnit::where('short_name', 'ITD')->first();
        $itd->children()->create([
            'name' => 'Software Development Division',
            'short_name' => 'SDD',
            'is_company' => false,
        ]);

        $itd->children()->create([
            'name' => 'Network and Infrastructure Division',
            'short_name' => 'NID',
            'is_company' => false,
        ]);
    }
}
