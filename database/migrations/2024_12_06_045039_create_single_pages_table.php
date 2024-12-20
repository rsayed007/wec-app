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
        Schema::create('single_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->text('banner');
            $table->longText('body');
            $table->tinyInteger('status')->default(1);
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_pages');
    }
};
