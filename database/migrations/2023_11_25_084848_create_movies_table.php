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
        Schema::create('movies', function (Blueprint $table) {
            $table->id('MovieID');
            $table->string('Cover');
            $table->string('GenreName');
            $table->string('Title');
            $table->string('Director');
            $table->string('Description');
            $table->integer('Duration');
            $table->integer('Rating');
            $table->date('ReleaseDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
