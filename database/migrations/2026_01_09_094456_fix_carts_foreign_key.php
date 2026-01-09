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
            // Hapus Foreign Key constraint pada kolom product_id
            try {
                $table->dropForeign(['product_id']);
            } catch (\Exception $e) {
                // Abaikan jika tidak ada foreign key, lanjut ke bawah
            }

            // Ubah kolom product_id agar Nullable
            $table->unsignedBigInteger('product_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
};
