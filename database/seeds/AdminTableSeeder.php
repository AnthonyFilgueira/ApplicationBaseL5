<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder{
	
	public function run(){
            
		\DB::table('users')->insert(array(
						'first_name'     => 'Test',
                        'last_name'      => 'Admin',
						'email'          => 'admin@example.com',
						'password'       => \Hash::make('1234'),
                        'type'           => 'admin'
		));
                \DB::table('user_profiles')->insert(array(
			'user_id'     => 1,
                        'birthdate'      => '1989/02/05',
			
		));
        \DB::table('users')->insert(array(
						'first_name'     => 'Test',
                        'last_name'      => 'User',
						'email'          => 'user@example.com',
						'password'       => \Hash::make('1234'),
                        'type'           => 'admin'
		));
                \DB::table('user_profiles')->insert(array(
			'user_id'     => 1,
                        'birthdate'      => '1989/02/05',
			
		));
	}
}
