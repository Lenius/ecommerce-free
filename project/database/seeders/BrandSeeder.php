<?php
namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            ['name' => 'Coca Cola', 'online' => true, 'description' => ''],
        ];

        foreach ($items as $item) {
            Brand::create($item);
        }
    }
}
