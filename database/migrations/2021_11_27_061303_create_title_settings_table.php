<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_settings', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->string('about_subtitle');
            $table->string('service_title');
            $table->string('service_subtitle');
            $table->string('portfolio_title');
            $table->string('portfolio_subtitle');
            $table->string('testimonial_title');
            $table->string('testimonial_subtitle');
            $table->string('contact_title');
            $table->string('contact_subtitle');
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
        Schema::dropIfExists('title_settings');
    }
}
