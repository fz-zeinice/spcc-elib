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
        Schema::create('users', function (Blueprint $table) {
            $table->id('usr_id');
            $table->string('usr_fname')->nullable();
            $table->string('usr_mname')->nullable();
            $table->string('usr_lname')->nullable();
            $table->string('usr_suff')->nullable();
            $table->string('usr_dob')->nullable();
            $table->string('usr_address')->nullable();
            $table->string('usr_email')->uniqe();
            $table->string('usr_password')->nullable();
            $table->integer('usr_delete')->default(0);
            $table->bigInteger('rl_id')->nullable();
            $table->string('usr_qr')->nullable();
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
