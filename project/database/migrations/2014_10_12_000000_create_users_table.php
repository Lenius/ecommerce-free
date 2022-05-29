<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->date('birth')->nullable();

            $table->boolean('super_admin')->default(false);
            $table->timestamp('blocked_at')->nullable();
            $table->timestamp('login_at')->nullable();

            $table->bigInteger('country_id')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
        });

        DB::statement('ALTER TABLE users ALTER COLUMN email TYPE citext');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
