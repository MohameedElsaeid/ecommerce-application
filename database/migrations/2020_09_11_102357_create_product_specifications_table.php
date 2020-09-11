<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->bigInteger('product_id');
            $table->char('width', 10)->default('0');
            $table->char('height', 10)->default('0');
            $table->char('depth', 10)->default('0');
            $table->char('weight', 10)->default('0');
            $table->boolean('quality_checking')->default(0);
            $table->char('freshness_Duration', 30)->default('0');
            $table->char('when_packeting', 30)->default('0');
            $table->char('each_box_contains', 10)->default('0');
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
        Schema::dropIfExists('product_specifications');
    }
}
