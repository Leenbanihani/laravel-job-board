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
        Schema::create('comment', function (Blueprint $table) {
           $table->uuid('id')->primary();
            $table->string(column:'author');
            $table->string(column:'content');
            $table->timestamps();
            $table->foreignId(column:'post_id')->constrained(table:'post')->cascadeOnDelete();// foreign key that links the comment to the post
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
