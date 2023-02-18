<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $maganszemely = random_int(0, 1);
        $veletlen = random_int(0, 1);
        $nev = array(['male', 'female']);
        $vezeteknev = '';
        $keresztnev = '';
        $adoszam1 = substr(str_shuffle("0123456789"), 0, 8);
        $adoszam2 = random_int(1, 5);
        $adoszam3 = random_int(11, 44);
        if ($maganszemely === 0){
            $cegnev = fake()->company();
            $vezeteknev = '';
            $keresztnev = '';
            $adoszam = $adoszam1.'-'.$adoszam2.'-'.$adoszam3;
        } else{
            $nem = fake()->randomElement(['male', 'female']);
            $cegnev = '';
            $vezeteknev = fake()->lastName($nem);
            $keresztnev = fake()->firstName($nem);
            $adoszam = '';
        }

        return [
            'user_id' => User::all()->random()->id,
            'person' => $maganszemely,
            'company' => $cegnev,
            'last_name' => $vezeteknev,
            'first_name' => $keresztnev,
            'postal_code' => fake()->randomElement([1541, 2045, 1156]),
            'city' => fake()->state(),
            'address' => fake()->streetAddress(),
            'phone_number' => fake()->phoneNumber(),
            'tax_number' => $adoszam
        ];
    }
}
