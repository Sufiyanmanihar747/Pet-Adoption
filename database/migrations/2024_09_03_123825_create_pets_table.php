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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->string('age');
            $table->text('description');
            $table->enum('gender', ['male','female']);
            $table->string('image')->nullable();
            $table->enum('status', ['adopted','available'])->default('available');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('species');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('species')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
