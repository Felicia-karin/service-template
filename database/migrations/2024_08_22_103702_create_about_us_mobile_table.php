<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_mobile', function (Blueprint $table) {
            $table->id();
            $table->string('wrapped_background_color');
            $table->string('wrapped_border_color');
            $table->string('title_text_color');
            $table->string('content_text_color');
            $table->decimal('wrapper_background_opacity', 3, 2); // e.g., 0.75
            $table->decimal('wrapper_border_opacity', 3, 2); // e.g., 0.75
            $table->decimal('title_text_opacity', 3, 2); // e.g., 0.75
            $table->decimal('content_text_opacity', 3, 2); // e.g., 0.75
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us_mobile');
    }
};
