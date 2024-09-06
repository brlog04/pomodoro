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
        Schema::table('pomodoros', function(Blueprint $table){
            $table->unsignedBigInteger('task_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pomodoros', function(Blueprint $table){
            $table->integer('task_id')->change();
        });
    }
};
