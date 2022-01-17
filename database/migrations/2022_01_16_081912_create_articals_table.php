<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articals', function (Blueprint $table) {
            $table->id();
            $table->string('ns_name')->nullable()->unique();
            $table->string('ns_slug')->index();
            $table->string('ns_description')->nullable();
            $table->longText('ns_content')->nullable();
            $table->tinyInteger('ns_active')->index()->default(0);
            $table->integer('ns_user_id')->index()->default(0);
            $table->string('ns_description_seo')->nullable();
            $table->string('ns_title_seo')->nullable();
            $table->string('ns_image')->nullable();
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
        Schema::dropIfExists('articals');
    }
}
