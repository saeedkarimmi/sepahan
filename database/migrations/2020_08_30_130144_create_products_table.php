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
            $table->string('title');
            $table->longText('description')->nullable();
            $table->longText('description_short')->nullable();
            $table->string('tip_product');
            $table->string('code_product');
            $table->longText('certificate_pdf_url')->nullable();
            $table->longText('datashid_pdf_url');
            $table->longText('manual_pdf_url')->nullable();
            $table->integer('brand_id')->unsigned();
            $table->integer('virtual_code');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('show_in_homepage')->default(0);







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
