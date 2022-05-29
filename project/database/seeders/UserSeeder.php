<?php
namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            ['name' => 'Admin User', 'email' => 'info@example.com', 'address1' => 'Address 1', 'password' => Hash::make('password'), 'remember_token' => '', 'super_admin' => true, 'country_id' => 1, 'email_verified_at' => Carbon::now()],
            ['name' => 'Demo User', 'email' => 'demo@example.com', 'address1' => 'Address 2', 'password' => Hash::make('password'), 'remember_token' => '', 'super_admin' => false, 'country_id' => 1, 'email_verified_at' => Carbon::now()],
        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
