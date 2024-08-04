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
        Schema::create('tb_distributor', function (Blueprint $table) {
            $table->id();
            $table->string('code_distributor')->unique();
            $table->string('name_distributor');
            $table->string('address_distributor');
            $table->string('email_distributor');
            $table->string('phoneNumber_distributor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_distributor');
    }
};
