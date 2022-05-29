<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('slug')->unique();
            $table->string('seo_title')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();
            $table->jsonb('images')->default('[]');
            $table->boolean('online')->default(false)->index();
            $table->integer('sorting')->default(0);
            $table->integer('per_page')->default(12);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
        });

        DB::select('CREATE OR REPLACE FUNCTION pl_categories() RETURNS trigger AS $BODY$DECLARE
                BEGIN
                IF (TG_OP = \'DELETE\') THEN
                  RETURN OLD;
                END IF;

                IF (TG_OP = \'UPDATE\') THEN

                  IF NEW.parent_id = NEW.id THEN
                    raise exception \'Cant set categories parent to it self\';
                  END IF;

                  IF NEW.online IS TRUE THEN
                    update categories set online = \'t\' where (id = OLD.parent_id);
                  END IF;

                  IF NEW.online IS FALSE THEN
                    update categories set online = \'f\' where (parent_id = OLD.id);
                  END IF;

                  RETURN NEW;

                END IF;

                IF (TG_OP = \'INSERT\') THEN
                  RETURN NEW;
                END IF;

                END;$BODY$
                  LANGUAGE plpgsql VOLATILE
                  COST 100;
        ');

        DB::select('CREATE TRIGGER check_categories BEFORE INSERT OR DELETE OR UPDATE ON categories FOR EACH ROW EXECUTE PROCEDURE pl_categories();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::select('DROP TRIGGER IF EXISTS check_categories ON categories CASCADE');
        DB::select('DROP FUNCTION IF EXISTS pl_categories() CASCADE');

        Schema::dropIfExists('categories');
    }
};
