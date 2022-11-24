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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('role')->default(4)->comment('1:Admin, 2: BO, 3: Manager, 4: Employee');
            $table->tinyInteger('status')->default(0)->comment('0: watting, 1: active, 2: deactive');
            $table->string('email')->unique();
            $table->string('name');
            $table->date('birthday_at')->nullable();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('cv')->nullable();
            $table->bigInteger('salary')->nullable();
            $table->tinyInteger('gender')->default(0)->comment('0: other, 1: male, 2: female');
            $table->string('phone_number');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
