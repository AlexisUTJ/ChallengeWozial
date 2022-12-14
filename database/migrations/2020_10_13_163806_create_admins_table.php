<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
					$table->bigIncrements('id');
					$table->string('user')->unique();
					$table->string('email')->unique()->nullable();
					$table->string('password');
					$table->tinyInteger('role');
					$table->boolean('menu_display')->nullable();
					$table->boolean('activo')->default(1);
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
        Schema::dropIfExists('admins');
    }
}
