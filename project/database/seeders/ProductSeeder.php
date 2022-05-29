<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('TRUNCATE products CASCADE');

        $items = [
            ['number' => 'zxy', 'name' => 'Product 1', 'description' => null, 'internal_note' => '', 'online' => true, 'brand_id' => 1, 'price' => 10, 'category_id' => 1, 'unit_id' => 1, 'weight' => 15, 'tax_id' => 1, 'images' => [['link' => 'https://img.purch.com/o/aHR0cHM6Ly93d3cubGFwdG9wbWFnLmNvbS9pbWFnZXMvdXBsb2Fkcy81MjY2L2cvbWFjYm9vay1haXItMjAxNy0wMDcuanBn', 'name' => 'Billede']]],
            ['number' => 'yxz', 'name' => 'Product 2', 'description' => null, 'internal_note' => '', 'online' => true, 'brand_id' => 2, 'price' => 20, 'category_id' => 2, 'unit_id' => 1, 'tax_id' => 1, 'weight' => 20, 'images' => [['link' => 'https://media.sweetwater.com/api/i/q-82__ha-190cf3ca731c4cbf__hmac-c6455dad9c714a187aec0fdfb275b70d4f04d314/images/items/750/iMacPro32V56-large.jpg', 'name' => 'Billede']]],
        ];

        foreach ($items as $item) {
            Product::create($item);//->categories()->sync([1, 2]);
        }
    }
}
