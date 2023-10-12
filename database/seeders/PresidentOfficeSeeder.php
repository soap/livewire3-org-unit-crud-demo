<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobPosition;
use App\Models\Employee;
use App\Models\OrganizationUnit;
use Illuminate\Support\Carbon;

class PresidentOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $president = Employee::factory()->create([
            'job_position_id' => JobPosition::where('name', 'President')->value('id'),
        ]);

        $company = OrganizationUnit::root()->first();
        $company->employees()->attach($president->id, [
            'start_date' => Carbon::now()->addYear(-5)->addDays(-random_int(1, 28)),
            'job_role_id' => 1,
        ]);

        $secretary = Employee::factory()->create([
            'job_position_id' => JobPosition::where('name', 'Managing Secretary')->value('id'),
        ]);

        $ofp = OrganizationUnit::where('short_name', 'OFP')->first();
        $ofp->employees()->attach($secretary->id, [
            'start_date' => Carbon::now()->addYear(-5)->addDays(-random_int(1, 28)),
            'job_role_id' => 1,
        ]);
    }
}
