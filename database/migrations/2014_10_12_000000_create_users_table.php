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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('region')->nullable();
            $table->text('profile_img')->nullable();
            $table->string('role');
            $table->string('user_type')->default('USER')->comment('USER for user / ADMIN for admin / DATA for data entry / MURAKEB for murakeb / MANDUB-M for mandub mutajawwel / MANDUB-S for mandub sebet / MUNASSEK for munassek');
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
}
