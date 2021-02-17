<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('avtosalon_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('keywords');
            $table->text('description');
            $table->string('color',75);
            $table->foreignId('car_model_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('body_type',50);
            $table->string('motor',75);
            $table->string('motor_power',75);
            $table->string('fuel_type',75);
            $table->string('gear_box',75);
            $table->string('transmission',75);
            $table->string('status',50)->default('Yeni');
            $table->string('barter')->default('False');
            $table->bigInteger('walk')->default(0);
            $table->integer('year');
            $table->integer('quantity')->default(1);
            $table->float('price');
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
        Schema::dropIfExists('cars');
    }
}
