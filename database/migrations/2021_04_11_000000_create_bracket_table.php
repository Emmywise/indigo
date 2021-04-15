<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bracket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spend');
            $table->string('£0.00 - £1,999.99');
            $table->string('£2,000 - £4,999.99');
            $table->string('5,000 - £24,999.99');
            $table->string('£25,000 and above');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bracket');
    }
}
