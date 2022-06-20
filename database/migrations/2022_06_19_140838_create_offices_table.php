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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->boolean('admin')->default('0');
            $table->string('owner');
            $table->string('aera');
            $table->string('std');
            $table->string('license');
            $table->string('histoy');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->boolean('parking')->default('0');
            $table->integer('level');
            $table->timestamps();

            $table->unique(['mobile','title']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
};