<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('TRUNCATE categories CASCADE');

        $items = [
            ['id' => 1, 'name' => 'Food', 'parent_id' => null, 'online' => true],
            ['id' => 2, 'name' => 'Drinks', 'parent_id' => null, 'online' => true],
        ];

        foreach ($items as $item) {
            Category::create($item);
        }
    }
}
