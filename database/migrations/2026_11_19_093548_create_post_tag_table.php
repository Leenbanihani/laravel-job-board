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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('post_id')->constrained('post')->onDelete('cascade');// foreign key that links the post_tag table to the post table
            $table->foreignId('tag_id')->constrained('tag')->onDelete('cascade');// foreign key that links the post_tag table to the tag table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
