<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $first_name = $this->faker->firstName();
        $last_name = $this->faker->lastName();
        $job_position_id = $this->faker->randomNumber(1, 10);
        return [
            'title' => $this->faker->title(),
            'first_name' => $first_name,
            'last_name' => $last_name,
            'join_date' => Carbon::now()->addYear(-random_int(1, 5))
                ->addMonth(-random_int(1, 12))
                ->addDays(-random_int(1, 28)),
            'status' => 1,
            'user_id' => User::factory()->create([
                'name' => $first_name . ' '. $last_name,
                'email' => $this->faker->unique()->safeEmail(),
            ])->id,
            'job_position_id' => $job_position_id,
        ];
    }
}
