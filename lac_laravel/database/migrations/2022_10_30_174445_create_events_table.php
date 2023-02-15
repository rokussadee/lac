<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date')->nullable();
            $table->string('slug')->unique();
            $table->date('date_to')->nullable();
            $table->text('description')->nullable();
            $table->string('images', 1000)->nullable();
            $table->string('location')->nullable();
            $table->string('doors')->nullable();
            $table->string('tickets')->nullable();
            $table->boolean('isActive')->default(false);
            $table->string('additional_category')->default('concert');
            $table->text('additional_description')->nullable();
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
        Schema::dropIfExists('events');
    }
};
