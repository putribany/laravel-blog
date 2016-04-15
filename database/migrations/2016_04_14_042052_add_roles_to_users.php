<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolesToUsers extends Migration
{

    public function up()

  {

    Schema::table('users', function (Blueprint $table) {

      $table->string('role')->default('reader');

    });

  }

  public function down()

  {

    Schema::table('users', function (Blueprint $table) {

      $table->dropColumn('role');

    });

  }
}
