<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'name' => 'LED TV',
            'type' => 'TV',
            'Brand' => 'Polytron',
            'model' => 'PLD 32D134',
            'room_id' => 1,
        ]);
        Device::create([
            'name' => 'Smart AC',
            'type' => 'AC',
            'Brand' => 'LG',
            'model' => 'TUV0746',
            'room_id' => 1,
        ]);
        Device::create([
            'name' => 'Smart AC',
            'type' => 'AC',
            'Brand' => 'LG',
            'model' => 'TUV0746',
            'room_id' => 2,
        ]);
    }
}
