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
        Schema::create('contact_queries', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('email');
            $table->string('contact');
            $table->string('menu_language');
            $table->string('message_query');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_queries');
    }
};
