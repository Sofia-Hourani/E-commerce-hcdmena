<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titleOptions = [
            'HRM Human Resources Management',
            'Payroll & Salary Analysis',
            'Preparing & Training New Employees Workshop',
            'Legal Management of Human Resources',
            'Preparing Training Plans & Employee Development',
            'Change Management & Organizational Transformation Workshop',
            'Microsoft Project',
            'Mini MBA',
            'Conflict Resolution in the Workplace Workshop',
        ];

        return [
            'name' =>$this->faker->randomElement($titleOptions),
            'description' => $this->faker->paragraph(),
            'delivery' => $this->faker->randomElement(['On Site', 'Online']),
            'price' => $this->faker->randomFloat(2, 50, 400),
            'start_date' => $this->faker->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
            'due_date' => $this->faker->dateTimeBetween('2025-12-01', '2026-01-31')->format('Y-m-d'),
            'register' => 'Apply',
            'total_hours' => $this->faker->randomFloat(1, 10, 100),
        ];
    }
}
