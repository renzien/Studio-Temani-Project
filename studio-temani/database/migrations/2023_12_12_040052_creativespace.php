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
        Schema::create('creativespaces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tagone');
            $table->text('descone');
            $table->string('tagtwo');
            $table->text('desctwo');
            $table->string('tagthree');
            $table->text('descthree');
            $table->string('tagfour');
            $table->string('tagfive');
            $table->string('unit');
            $table->string('price');
            $table->string('unitprice');
            $table->string('pricetwo');
            $table->string('descpricetwo');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creativespaces');
    }
};
