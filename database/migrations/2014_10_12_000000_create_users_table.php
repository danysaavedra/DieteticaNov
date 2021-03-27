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
        $table->bigIncrements('id');
        $table->string('name', 100);
        $table->string('lastname', 100);
        $table->string('email', 180)->unique();

        $table->timestamp('email_verified_at')->nullable();
        $table->string('password', 100);
        $table->string('foto', 300)->nullable();
        $table->boolean('admin')->default(0);

        $table->string('tel1', 100);
        $table->string('tel2', 100)->nullable();
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
}
