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
        Schema::create('deputados', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("partyAcronym", 255);
            $table->string("uf", 2);
            $table->string("email")->unique()->nullable();
            $table->text("urlPhoto");
            $table->index('partyAcronym');
            $table->index('uf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputados');
    }
};
