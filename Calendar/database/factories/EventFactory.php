<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'start_time' =>  Carbon::now()->addDay(rand(0,30)),
            'finish_time' => Carbon::now()->addDay(rand(0,1)),
            'comments' => $this->faker->sentence(5),

        ];
    }
}
