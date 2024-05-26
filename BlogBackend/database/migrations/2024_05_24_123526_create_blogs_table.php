<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable(); // Add image column
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('user_id')->references('id')->on('profiles')->onDelete('cascade');
            // $table->foreign('profile_id')->references('id')->on('profile')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
