<?php

namespace Database\Factories;

use App\Models\Apartment;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'address'=>$this->faker->city,
            'price'=>$this->faker->randomDigit,
            'general information'=>$this->faker->text(20),
            'detail'=>$this->faker->text(20),
            'image'=>$this->faker->imageUrl(200,200),
            'status'=>'HOT'
        ];
    }
}
