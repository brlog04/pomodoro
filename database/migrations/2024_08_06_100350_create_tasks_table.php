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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('note', 300)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable()->nullable();;
            $table->dateTime('completed_on')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('deleted_by')->nullable()->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
