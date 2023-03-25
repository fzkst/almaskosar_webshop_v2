<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nem = fake()->randomElement(['male', 'female']);
        //$nev = fake()->lastName() . ' ' . fake()->firstName($nem);   //fake()->name($nem);
        $keresztnev = fake()->firstName($nem);
        $vezeteknev = fake()->lastName();
        $nev = $vezeteknev.' '.$keresztnev;
        $ekezetesKarakterek = array('á', 'é', 'ö', 'ü', 'ő', 'ű', 'ú', 'í', ' ');
        $karakterek = array('a', 'e', 'o', 'u', 'o', 'u', 'u', 'i', '');
        $email = str_replace($ekezetesKarakterek, $karakterek, Str::lower($nev));
        $randomNumber = random_int(111, 999);
        $email = $email.$randomNumber."@gmail.com";

        return [
            'name' => $nev,
            'email' => $email,  //fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'last_name' => $vezeteknev,
            'first_name' => $keresztnev,
            'postal_code' => fake()->randomElement([1541, 2045, 1156]),
            'city' => fake()->city(),
            'address' => fake()->streetAddress(),
            'phone_number' => fake()->phoneNumber(),
            'customer_code' => $randomNumber,
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
