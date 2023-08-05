<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'first_name' => 'admin',
            'last_name' => '',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$f9OPL3oalXCjcynICPpV2uOeKalIFwKQC8wjnxZd8.gS0N2Owj5aC',
            'created_at' => Carbon::now()
        ];

        // Insert
        User::insert($user);
    }
}
