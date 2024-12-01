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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id('trans_id');
            $table->string('trans_date')->nullable();
            $table->bigInteger('usr_id')->nullable();
            $table->string('trans_status')->nullable();
            $table->string('trans_remarks')->nullable();
            $table->string('trans_qr')->nullable();
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
