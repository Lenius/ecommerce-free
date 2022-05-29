<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('brand_id')->nullable()->index();
            $table->bigInteger('category_id')->nullable()->index();
            $table->bigInteger('unit_id')->default(1);
            $table->bigInteger('tax_id')->default(1);
            $table->bigInteger('stock_status_id')->default(1);

            $table->string('name');
            $table->string('slug')->unique();

            $table->string('number')->unique();
            $table->string('ean', 13)->nullable();

            $table->string('seo_title')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();

            $table->text('description')->nullable();

            $table->text('internal_note')->nullable();
            $table->text('location')->nullable();

            $table->jsonb('images')->default('[]');
            $table->jsonb('options')->default('[]');

            $table->integer('weight')->default(0);
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('depth')->nullable();

            $table->decimal('price', 10, 2);
            $table->decimal('price_recommended', 10, 2)->nullable();

            $table->integer('stock_quantity')->nullable();

            $table->boolean('online')->default(false)->index();
            $table->boolean('offer')->default(false);

            $table->integer('sorting')->default(0);

            $table->foreign('stock_status_id')->references('id')->on('stock_statuses');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('tax_id')->references('id')->on('taxes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
