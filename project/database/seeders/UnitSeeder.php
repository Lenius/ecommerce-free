<?php
namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            ['name' => 'Stk'],
            ['name' => 'Meter'],
            ['name' => 'Palle'],
            ['name' => 'Kg'],
            ['name' => 'Cm'],
        ];

        foreach ($items as $item) {
            Unit::create($item);
        }
    }
}
