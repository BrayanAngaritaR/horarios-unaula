<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	App\User::create([
			'name' => 'Encargado',
			'email' => 'encargado@horarios.test',
			'email_verified_at' => now(),
			'rol' => 'encargado',
			'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'remember_token' => Str::random(10),
    	]);

    	App\User::create([
			'name' => 'Planeación',
			'email' => 'planeacion@horarios.test',
			'email_verified_at' => now(),
			'rol' => 'planeacion',
			'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'remember_token' => Str::random(10),
    	]);
        // $this->call(UsersTableSeeder::class);
    }
}
