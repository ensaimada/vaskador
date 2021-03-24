<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->uuid('project_key');
            $table->string('project_addr_line')->nullable();
            $table->string('project_addr_road')->nullable();
            $table->string('project_addr_subdistrict')->nullable();
            $table->string('project_addr_district')->nullable();
            $table->string('project_addr_province')->nullable();
            $table->integer('project_addr_postcode')->nullable();
            
            $table->string('project_busn_industry')->nullable();
            $table->string('project_busn_category')->nullable();
            $table->string('project_busn_subcategory')->nullable();
            $table->string('project_busn_type')->nullable();
            $table->string('project_busn_subtype')->nullable();
            $table->json('project_busn_typetags')->nullable();
            $table->json('project_busn_metatags')->nullable();
            $table->enum('project_busn_size_type',['Small','Medium','Large'])->nullable();
            
            $table->timestamps();

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
        Schema::dropIfExists('project_details');
    }
}
