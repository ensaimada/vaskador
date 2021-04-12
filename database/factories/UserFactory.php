<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = User::class;
    protected $modeldetail = UserDetail::class;


    /**
     * Define the model's default state.
     * @return array
     */
    public function definition() {
        $uuid = Uuid::generate();

        return [
            'user_key' => $this->$uuid,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
