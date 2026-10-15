<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'class' => fake()->randomElement(['12 TKJ 1', '12 AKL 1', '12 BiD 1']),
            'major' => fake()->randomElement(['TKJ', 'AKL', 'BiD']),
        ];
    }
}
