<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        $j = 1;
        while ($i < 10) {
            while ($j < 9) {
                Room::create([
                    'number' => $i . '0' . $j,
                    'capacity' => 50
                ]);
                $j++;
            }
            $i++;
        }

    }
}
