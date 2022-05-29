<?php
namespace Database\Seeders;

use App\Models\StockStatus;
use Illuminate\Database\Seeder;

class StockStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            ['name' => 'Ikke på lager'],
            ['name' => 'På lager'],
            ['name' => 'Kan afhentes'],
        ];

        foreach ($items as $item) {
            StockStatus::create($item);
        }
    }
}
