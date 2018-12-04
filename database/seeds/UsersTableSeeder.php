<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
			'name' => 'FirstName LastName',
			'email' => 'admin@admin.com',
			'email_verified_at' => now(),
			'password' => bcrypt('secret'),
			'remember_token' => str_random(10),
			'type' => User::ADMIN_TYPE,
		]);
    }
}
