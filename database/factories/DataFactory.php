<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $address =   $this->faker->address();
        $phone = $this->faker->unique()->phoneNumber;
        return [
            'mec_id' => rand(1,10),
            'country_id'=> rand(1 , 10),
            'region_id' => rand(1, 14),
            'city_id'=> rand(1 , 10),
            'name' => $this->faker->name(),
            'postal' => rand(20000, 29999),
            'email' => $this->faker->unique()->safeEmail(),
            'email2' => $this->faker->unique()->safeEmail(),
            'phone' => $phone,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'website' => $this->faker->url,
            'fax' => $phone,
            'address' => $address,
            'address_short' => substr($address,0, 40),
            'latitude' =>$this->faker->latitude(40, 0),
            'longitude' =>$this->faker->longitude(-3, 180),
            'plan_preference' => $this->faker->randomElement(['anual','mensual']),
            'leads' => rand(0,20),
            'business_status'=>$this->faker->randomElement(['OPERATIONAL','CLOSED_PERMANENTLY']),
            'google_user_ratings_total' => rand(1, 50),
            'google_rating' => rand(1,5),
            'revisor' => $this->faker->name(),
            'active' => rand(0,1)
        ];
    }
}
