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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('ice')->nullable();
            $table->string('rc')->nullable();
            $table->string('if')->nullable();
            $table->string('tax')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('cnss')->nullable();
            $table->string('siren')->nullable();
            $table->string('siret')->nullable();
            $table->string('vat')->nullable();
            $table->boolean('isClient')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
