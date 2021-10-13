<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;


class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'hotel' => 'Testing Hotel',
            'name' => '0711',
            'type_id' => 1,
            'status' => 'vc',
            'dnd' => 'false'
        ]);
        Room::create([
            'hotel' => 'Testing Hotel',
            'name' => '111',
            'type_id' => 2,
            'status' => 'vd',
            'dnd' => 'false'
        ]);
        Room::create([
            'hotel' => 'Testing Hotel',
            'name' => '123',
            'type_id' => 1,
            'status' => 'oc',
            'dnd' => 'true'
        ]);
        Room::create([
            'hotel' => 'Testing Hotel',
            'name' => '113',
            'type_id' => 2,
            'status' => 'rs',
            'dnd' => 'false'
        ]);
    }
}
