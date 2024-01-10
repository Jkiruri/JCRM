<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
use App\Models\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $contact = Contact::factory()->create();

        return [
            'contact_id' => $contact->id,
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->companyEmail,
            'industry' => $this->faker->firstName,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}