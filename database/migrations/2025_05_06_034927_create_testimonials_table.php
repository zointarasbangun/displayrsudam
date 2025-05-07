<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->tinyInteger('rating');
        $table->text('message');
        $table->string('media_type')->nullable();
        $table->string('image')->nullable();
        $table->string('video_url')->nullable();
        $table->string('photo')->nullable();
        $table->timestamps();
    });
}
};
