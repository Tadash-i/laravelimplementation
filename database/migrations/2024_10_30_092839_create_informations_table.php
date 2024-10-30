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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('contact');
            $table->longText('objective');
            $table->string('tertiary');
            $table->string('tersy');
            $table->string('secondary1');
            $table->string('secsy1');
            $table->string('secondary2');
            $table->string('secsy2');
            $table->string('primary');
            $table->string('prisy');
            $table->string('birthdate');
            $table->string('age');
            $table->string('placeofbirth');
            $table->string('gender');
            $table->string('religion');
            $table->string('nationality');
            $table->string('civilstatus');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
