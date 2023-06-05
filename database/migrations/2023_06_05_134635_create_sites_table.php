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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();

            $table->string('domain')->nullable();
            $table->integer('organisation_id')->index('organisation_id');
            $table->string('status')->nullable(); // Статус сайта
            $table->string('subject')->nullable(); // тематика сайта
            $table->string('keywords')->nullable(); // ключевые слова для сайта
            $table->string('title')->nullable(); // Заголовок сайта
            $table->string('description')->nullable(); // Описание сайта
            $table->string('token')->nullable()->index(); // токен для удаленного управления сайтом

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
