<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
	            'name' => 'Administrator',
	            'email' => 'admin@admin.com',
	            'is_admin' => true,
	            'password' => bcrypt('admin'),
                'photo' => "default-user.png"
            ]
        ]);
    }
}
