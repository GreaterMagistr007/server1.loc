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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('site_id')->nullable(); // Сайт, к которому относится статья
            // Контент
            $table->longText('content_original')->nullable(); // Базовый контент
            $table->text('content_modified')->nullable(); // Измененный (нейросетью) контент
            // Заголовок
            $table->longText('title_original')->nullable(); // Базовый заголовок
            $table->text('title_modified')->nullable(); // Измененный (нейросетью) заголовок

            $table->string('status')->nullable(); // Статус статьи
            $table->string('image')->nullable(); // Картинка для статьи (когда научимся делать)

            // Мета данные статьи:
            $table->text('meta_keywords')->nullable(); // Определяет ключевые слова, связанные со страницей. (Уже не имеет большого значения для поисковых систем)
            $table->text('meta_description')->nullable(); // Предоставляет краткое описание содержания страницы.

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
