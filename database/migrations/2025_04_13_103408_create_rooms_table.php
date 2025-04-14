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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->boolean("available");
            $table->integer("number");
            $table->enum("floor", [1, 2, 3, 4]);
            $table->unique(["floor", "number"]);
            $table->enum("type", [
                "library",
                "classroom",
                "comlab",
                "comfort room",
                "office"
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
