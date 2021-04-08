<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('project_key')->primary();
            $table->uuid('collaboration_key');
            $table->string('project_title',20);
            $table->string('project_description',40)->nullable();
            $table->timestamps();

            $table->foreign('collaboration_key')->references('collaboration_key')->on('collaborations');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('projects');
    }
}
