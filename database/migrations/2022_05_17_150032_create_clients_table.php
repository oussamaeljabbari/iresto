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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
	        $table->string('first_name')->nullable();
	        $table->string('last_name')->nullable();
	        $table->string('address')->nullable();
	        $table->string('number')->nullable();
	        $table->enum('gender',['male','female','none'])->nullable();
	        $table->date('birthday')->nullable();
	        $table->string('email')->unique();
	        $table->timestamp('email_verified_at')->nullable();
	        $table->string('password');
	        $table->string('avatar')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
