<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('stores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('store_name', ['ict', 'transmitter', 'technical']);
            $table->integer('quantity');
            $table->string('location');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
            $table->integer('itemId')->nullable()->index('itemId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
