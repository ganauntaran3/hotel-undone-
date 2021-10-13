<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(
        [
            'hotel' => 'Test Hotel',
            'name' => 'Deluxe Double',
            'room_size' => '50 sqm'
        ]);

        DB::table('types')->insert([
            'hotel' => 'Test Hotel',
            'name' => 'Deluxe Twin',
            'room_size' => '50 sqm'
        ]);
    }
}
