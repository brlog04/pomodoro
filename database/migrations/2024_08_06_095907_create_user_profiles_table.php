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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('facebook', 128)->nullable();
            $table->string('twitter', 128)->nullable();
            $table->string('googleplus', 128)->nullable();
            $table->string('linkedin', 128)->nullable();
            $table->text('about')->nullable();
            $table->string('website', 256)->nullable();
            $table->string('phone', 24)->nullable();            
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
