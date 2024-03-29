<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * name
     * photo
     * bio
     * dob
     * country
     */
    public function up(): void
    {
        Schema::create('userprofile', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->text("photo")->nullable()->default('images/user-svgrepo-com.svg');
            $table->longText("bio")->nullable()->default(NULL);
            $table->date("dob")->nullable()->default(NULL);
            $table->string('country')->nullable()->default(NULL);
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofile');
    }
};
