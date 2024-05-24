<?php

namespace Database\Seeders;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Para instalara por primera vez.
        // seder de roles, permiso y usuarios principla
    /*
        $this->call([
            RoleSeeder::class,
            UserSeeder::class
        ]);
    */

        $this->call([
            RegionSeeder::class
        ]);

    }
}
