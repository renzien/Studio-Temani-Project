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
        Schema::create('studioequips', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tagline');
            $table->string('list1');
            $table->string('list2');
            $table->string('list3');
            $table->string('list4');
            $table->string('list5');
            $table->string('list6');
            $table->text('desc');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studioequips');
    }
};
