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
        Schema::create('tb_add_information_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tb_users');
            $table->string('city');
            $table->string('province');
            $table->longText('address');
            $table->string('number_phone_backup');
            $table->string('email_backup');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_add_information_users');
    }
};
