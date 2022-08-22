<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('card_type')->nullable();
            $table->string('nickname')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->text('note')->nullable();
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_cards');
    }
}
