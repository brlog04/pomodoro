<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->integer('client_id')->unsigned();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_by')->references('id')->on('users');
            $table->foreignId('deleted_by')->nullable()->references('id')->on('users');
            $table->foreignId('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });

        Schema::create('project_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_user');
        Schema::dropIfExists('projects');
    }
};
