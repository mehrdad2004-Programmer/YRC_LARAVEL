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
        Schema::create("course_registration", function(Blueprint $table){
            $table->id();

            $cols = [
                "fname",
                "lname",
                "id_no",
                "st_no",
                "phone_no",
                "course_code",
                "date",
                "time",
                "tracking_code"
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
        Schema::dropIfExists("course_registration");
    }
};
