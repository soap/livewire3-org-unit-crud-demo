<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Employee;
use App\Models\JobPosition;
use App\Models\OrganizationUnit;

class InformationTechnologyDeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itdDept = OrganizationUnit::where('short_name', 'ITD')->first();
        $seniorManager = Employee::factory()->create([
            'job_position_id' => JobPosition::where('name', 'Senior Manager')->value('id'),
        ]);

        $itdDept->employees()->attach($seniorManager->id, [
            'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
            'job_role_id' => 1, // Head of Unit
        ]);

        $employees = Employee::factory()->count(2)->create([
            'job_position_id' => JobPosition::where('name', 'Engineer')->value('id'),
        ]);

        collect($employees)->each(function ($employee) use ($itdDept) {
            $itdDept->employees()->attach($employee->id, [
                'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
                'job_role_id' => 3, // Staff
            ]);
        });

        $itdDept->employees()->attach(Employee::factory()->create([
            'job_position_id' => JobPosition::where('name', 'Staff')->value('id')
        ])->id, [
            'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
            'job_role_id' => 3, // Staff
        ]);

        $sdsSection = OrganizationUnit::where('short_name', 'SDD')->first();
        $manager = Employee::factory()->create([
            'job_position_id' => JobPosition::where('name', 'Manager')->value('id'),
        ]);

        $sdsSection->employees()->attach($manager->id, [
            'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
            'job_role_id' => 1, // Head of Unit
        ]);

        $employees = Employee::factory()->count(5)->create([
            'job_position_id' => JobPosition::where('name', 'Engineer')->value('id'),
        ]);

        collect($employees)->each(function ($employee) use ($sdsSection) {
            $sdsSection->employees()->attach($employee->id, [
                'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
                'job_role_id' => 3, // Staff
            ]);
        });

        $nisSection = OrganizationUnit::where('short_name', 'NID')->first();
        $manager = Employee::factory()->create([
            'job_position_id' => JobPosition::where('name', 'Manager')->value('id'),
        ]);

        $nisSection->employees()->attach($manager->id, [
            'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
            'job_role_id' => 1, // Deputy Head of Unit
        ]); 

        $employees = Employee::factory()->count(2)->create([
            'job_position_id' => JobPosition::where('name', 'Engineer')->value('id'),
        ]);

        collect($employees)->each(function ($employee) use ($nisSection) {
            $nisSection->employees()->attach($employee->id, [
                'start_date' => Carbon::now()->addYear(-random_int(1, 5))->addDays(-random_int(1, 28)),
                'job_role_id' => 3, // Staff
            ]);
        });
    }
}
