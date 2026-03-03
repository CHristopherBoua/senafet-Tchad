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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partenaire_sector_id')->nullable()->constrained('partenaire_sectors')->nullOnDelete();
            $table->string('company');
            $table->string('contact_name');
            $table->string('email');
            $table->string('phone', 50)->nullable();
            $table->string('level'); // platine, or, argent, bronze
            $table->string('logo_path')->nullable();
            $table->text('message')->nullable();
            $table->boolean('is_published')->default(false);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partenaires');
    }
};
