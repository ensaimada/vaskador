<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_reports', function (Blueprint $table) {
            $table->uuid('report_key')->primary();
            $table->char('module_code',10);
            $table->uuid('project_key');
            $table->json('report_data')->nullable();
            $table->timestamps();

            $table->foreign('module_code')->references('module_code')->on('modules');
            $table->foreign('project_key')->references('project_key')->on('projects');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_reports');
    }
}
