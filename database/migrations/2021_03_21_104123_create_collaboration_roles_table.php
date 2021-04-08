<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationRolesTable extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('collaboration_roles', function (Blueprint $table) {
            $table->char('collaboration_role_code',5)->primary();
            $table->string('collaboration_role_title',20);
            $table->binary('collaboration_role_permissions',3);
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('collaboration_roles');
    }
}
