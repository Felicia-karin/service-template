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
        Schema::create('homepage_desktop', function (Blueprint $table) {
            $table->id();
            $table->string('announcer_text');
            $table->string('background_color');
            $table->string('icon_color');
            $table->string('text_color');
            $table->decimal('background_opacity', 3, 2); // e.g., 0.75
            $table->decimal('icon_opacity', 3, 2); // e.g., 0.75
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
        Schema::dropIfExists('homepage_desktop');
    }
};
