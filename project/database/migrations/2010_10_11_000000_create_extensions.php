<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateExtensions extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::select('CREATE EXTENSION IF NOT EXISTS citext');
        DB::select('CREATE EXTENSION IF NOT EXISTS tablefunc');
        DB::select('CREATE EXTENSION IF NOT EXISTS postgis');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::select('DROP EXTENSION IF EXISTS citext CASCADE');
        DB::select('DROP EXTENSION IF EXISTS tablefunc CASCADE');
        DB::select('DROP EXTENSION IF EXISTS postgis CASCADE');
    }
}
