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
        Schema::create('protects', function (Blueprint $table) {
            $table->id();
            $table->string('protect_title');
            $table->string('short_p');
            $table->string('image');
            $table->string('pro_rules1');
            $table->string('pro_rules2');
            $table->string('pro_rules3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protects');
    }
};
