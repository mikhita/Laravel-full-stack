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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('status');
            $table->date('date')->default(now());
            $table->dateTime('date-time')->default(now());
            $table->decimal('decimal')->default(0.00);
            $table->float('float')->default(0.0);
            $table->double('double')->default(0.0);
            $table->integer('integer')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
