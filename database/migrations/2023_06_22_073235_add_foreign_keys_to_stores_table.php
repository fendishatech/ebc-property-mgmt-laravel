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
        Schema::table('storeItems', function (Blueprint $table) {
            $table->foreign(['itemId'], 'store_items_ibfk_1')->references(['id'])->on('items')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('storeItems', function (Blueprint $table) {
            $table->dropForeign('stores_ibfk_1');
        });
    }
};
