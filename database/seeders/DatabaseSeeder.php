<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\DeviceSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypeSeeder::class,
            UserSeeder::class,
            RoomSeeder::class,
            DeviceSeeder::class,
        ]);
    }
}
