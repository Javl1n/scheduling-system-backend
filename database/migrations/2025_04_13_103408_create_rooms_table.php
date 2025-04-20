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

            $table->string("code");
            $table->string("description");

            $table->string("span");

            $table->enum("placement", ["right", "center", "left"]);
            $table->enum("floor", [1, 2, 3, 4]);
            $table->integer("number");
            $table->unique(["floor", "number", "placement"]);

            $table->enum("type", [
                "Library",
                "Classroom",
                "Laboratory",
                "Comfort Room",
                "Office",
                "Misc.",
                "Structure",
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
