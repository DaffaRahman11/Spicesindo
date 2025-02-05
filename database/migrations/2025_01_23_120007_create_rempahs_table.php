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
        Schema::create('rempahs', function (Blueprint $table) {
            $table->id();
            $table->string('namaRempah');
            $table->string('slug')->unique();
            $table->text('detailRempah');
            $table->string('fotoRempah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rempahs');
    }
};
