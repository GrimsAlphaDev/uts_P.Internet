<?php

namespace Database\Seeders;

use App\Models\Groups;
use App\Models\User;
use App\Models\Anggotas;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Groups::factory(3)->create();
        Anggotas::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
