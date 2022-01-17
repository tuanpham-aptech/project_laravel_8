<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name')->unique();
            $table->string('pro_slug')->index();
            $table->integer('pro_category_id')->index()->default(0);
            $table->integer('pro_price')->default(0);
            $table->integer('pro_sale')->default(0);
            $table->integer('pro_quantity')->default(0);
            $table->tinyInteger('pro_active')->default(1);
            $table->tinyInteger('pro_hot')->default(0);
            $table->string('pro_description')->nullable();
            $table->string('pro_image')->nullable();
            $table->string('pro_keyword_seo')->nullable();
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
}
