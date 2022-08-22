<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('account_id')->nullable();
            $table->string('from')->nullable();
            $table->decimal('amount', 11, 2)->default(0);
            $table->string('acct_number')->nullable();
            $table->string('rep_name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('note')->nullable();

            $table->string('ben_name')->nullable();
            $table->string('ben_country')->nullable();
            $table->string('ben_city')->nullable();
            $table->string('ben_address')->nullable();
            $table->string('country')->nullable();

            $table->boolean('is_admin')->default(false)->nullable();
            $table->boolean('is_code')->default(false)->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->integer('credit')->nullable()->default(0);
            $table->integer('debit')->nullable()->default(0);
            $table->string('trans_type')->nullable();

            $table->decimal('vat', 11, 2)->nullable();

            $table->string('swift_code')->nullable();

            $table->string('trn')->nullable();
            $table->string('admin_trn')->nullable();
            $table->string('atc_code')->nullable();
            $table->string('admin_atc_code')->nullable();
            $table->string('otp')->nullable();
            $table->string('admin_otp')->nullable();
            $table->string('nsb_code')->nullable();
            $table->string('admin_nsb_code')->nullable();

            $table->integer('nsb_transfer')->default(0)->nullable();
            $table->integer('obank_transfer')->default(0)->nullable();
            $table->integer('fcurrency_transfer')->default(0)->nullable();
            $table->integer('wire_transfer')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdrawals');
    }
}
