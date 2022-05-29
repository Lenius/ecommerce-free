<?php
namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            ['name' => '25 % moms', 'value' => 25.00],
            ['name' => '0 % moms', 'value' => 0.00],
        ];

        foreach ($items as $item) {
            Tax::create($item);
        }
    }
}
