<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //https://gist.githubusercontent.com/keeguon/2310008/raw/bdc2ce1c1e3f28f9cab5b4393c7549f38361be4e/countries.json

        DB::table('countries')->insert([
            'name'                     => 'Denmark',
            'code'                     => 'DK',
            'online'                   => true,
            'created_at'               => Carbon::now(),
            'updated_at'               => Carbon::now(),
        ]);
    }
}
