<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('pass')->nullable();
            $table->string('title')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->string('m_status')->nullable();
            $table->string('account_type')->nullable();
            $table->string('preferred_currency')->nullable();

            $table->string('cus_identification')->nullable();
            $table->string('cus_expiry')->nullable();
            $table->string('cus_idnumber')->nullable();
            $table->string('cus_image')->nullable();

            $table->string('occupation')->nullable();
            $table->string('annual_salary')->nullable();
            $table->string('position')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_name')->nullable();
            $table->string('employer_name')->nullable();

            $table->integer('status')->default(0)->nullable(); // check is account is active
            $table->integer('admin')->default(0)->nullable();
            $table->integer('eligable')->default(0);
            $table->integer('sms')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
