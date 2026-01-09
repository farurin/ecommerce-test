<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            // Tambah kolom snapshot setelah kolom user_id
            $table->string('product_title')->nullable()->after('user_id');
            $table->string('product_photo')->nullable()->after('product_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn(['product_title', 'product_photo']);
        });
    }
};
