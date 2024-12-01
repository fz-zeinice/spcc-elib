<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('bk_id');
            $table->string('bk_title')->nullable();
            $table->bigInteger('aut_id')->nullable();
            $table->bigInteger('subj_id')->nullable();
            $table->integer('bk_year')->nullable();
            $table->string('bk_quantity')->nullable();
            $table->string('bk_isbn')->nullable();
            $table->string('bk_dd')->nullable();
            $table->bigInteger('bt_id')->nullable();
            $table->string('bk_qr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
