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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('logo_dark')->nullable();
            $table->string('logo_light')->nullable();
            $table->string('favicon_dark')->nullable();
            $table->string('favicon_light')->nullable();

            // hero section
            $table->string('hero_title')->nullable();
            $table->text('hero_desc')->nullable();
            $table->string('hero_image')->nullable();


            //about and contact
             $table->string('fb_link')->nullable();
             $table->string('linked_link')->nullable();
             $table->string('github_link')->nullable();
             $table->string('wh_link')->nullable();

             $table->string('email')->nullable();
             $table->string('phone')->nullable();
             $table->string('location')->nullable();

             $table->json('images')->nullable();  // sponser etc

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
