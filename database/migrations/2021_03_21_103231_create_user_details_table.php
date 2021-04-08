<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('user_details', function (Blueprint $table) {
            $table->uuid('user_key');
            $table->string('name_title',15);
            $table->string('name_given',40);
            $table->string('name_middle',40)->nullable();
            $table->string('name_last',40);
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male','Female','Other','Unspecified'])->nullable();
            $table->timestamps();

            $table->foreign('user_key')->references('user_key')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_details');
    }
}
