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
        Schema::create("courses", function(Blueprint $table){
            $table->id();

            $cols = [
                "title",
                "duration",
                "teacher",
                "start_date",
                "amount",
                "poster",
                "community",
                "course_code"
            ];

            foreach($cols as $col){
                $table->string($col);
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("courses");
    }
};
