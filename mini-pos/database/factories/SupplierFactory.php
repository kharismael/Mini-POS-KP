<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>$this->faker->uuid(),
            'name'=> $this->faker->name(),
            'telp'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'village_id'=>'00007611-9128-4626-b1e7-7f2eda700590',
        ];
    }
}
