<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    protected $model = City::class;

    public function definition(): array
    {
    	return [
    	    'name' =>$this->faker->city(),
            'department_id' => $this->faker->numberBetween(1,10),
    	];
    }
}
