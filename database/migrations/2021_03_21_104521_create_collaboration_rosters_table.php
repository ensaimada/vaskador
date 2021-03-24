<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationRostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaboration_rosters', function (Blueprint $table) {
            $table->uuid('collaboration_key');
            $table->uuid('user_key');
            $table->char('collaboration_role_code',5);
            $table->timestamps();

            $table->foreign('collaboration_key')->references('collaboration_key')->on('collaborations');
            $table->foreign('user_key')->references('user_key')->on('users');
            $table->foreign('collaboration_role_code')->references('collaboration_role_code')->on('collaboration_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaboration_rosters');
    }
}
