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
        Schema::create('sidebar_mobile', function (Blueprint $table) {
            $table->id();
            $table->string('background_color');
            $table->string('sidebar_background_color');
            $table->decimal('sidebar_background_opacity', 3, 2); // e.g., 0.75
            $table->string('sidebar_section_title_color');
            $table->string('sidebar_icon_color');
            $table->string('sidebar_text_color');
            $table->decimal('sidebar_section_title_opacity', 3, 2); // e.g., 0.75
            $table->decimal('sidebar_icon_opacity', 3, 2); // e.g., 0.75
            $table->decimal('sidebar_text_opacity', 3, 2); // e.g., 0.75
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
        Schema::dropIfExists('sidebar_mobile');
    }
};
