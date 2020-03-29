<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->bigInteger('product_category')->unsigned()->nullable();
            $table->string('product_name');
            $table->string('product_image');
            $table->bigInteger('product_price');
            $table->timestamps();
        });

        Schema::table('product', function($table) {
            $table->foreign('product_category')->references('category_id')->on('category')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
        Schema::table('product', function(Blueprint $table){
            $table->dropForeign('product_product_category_foreign');
            $table->dropColumn('category_id');
        });
    }
}
