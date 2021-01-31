<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Brayan Vilchez Daga',
            'email' => 'brayandaga5@gmail.com',
            'password' => '$2y$10$16KSf6Z4Ak2qJx9WfIyraeE1xyB6a4Ep4RRGZzQ6GfBsNUjddFyhO'
        ]);
    }
}
