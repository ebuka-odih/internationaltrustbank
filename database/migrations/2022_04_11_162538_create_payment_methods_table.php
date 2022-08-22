<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            $table->decimal('amount', 11, 2);
            $table->integer('status')->default(0)->nullable();
            $table->bigInteger('user_id');
            $table->text('note')->nullable();
            $table->string('payment_type');

            $table->string('bank_name')->nullable();
            $table->string('acct_name')->nullable();
            $table->string('acct_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('routine_number')->nullable();
            $table->string('amount_1')->nullable();
            $table->string('amount_2')->nullable();
            $table->string('amount_3')->nullable();

            $table->string('btc_wallet')->nullable();

            $table->string('instant_type')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}
