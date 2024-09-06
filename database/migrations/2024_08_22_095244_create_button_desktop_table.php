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
        Schema::create('button_desktop', function (Blueprint $table) {
            $table->id();
            $table->string('button_color');
            $table->string('login_button_background_color');
            $table->string('login_button_border_color');
            $table->string('login_button_background_hover_color');
            $table->string('login_button_background_selected_color');
            $table->string('login_button_text_color');
            $table->decimal('login_button_background_opacity', 3, 2); // e.g., 0.75
            $table->decimal('login_button_border_opacity', 3, 2); // e.g., 0.75
            $table->decimal('login_button_hover_opacity', 3, 2); // e.g., 0.75
            $table->decimal('login_button_selected_opacity', 3, 2); // e.g., 0.75
            $table->decimal('login_button_text_opacity', 3, 2); // e.g., 0.75
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
        Schema::dropIfExists('button_desktop');
    }
};
