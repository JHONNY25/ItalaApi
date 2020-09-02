<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('module_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('modules_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('modules_id');
            $table->string('display_name')->nullable();
            $table->string('permission')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('modules_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules_permissions');
        Schema::dropIfExists('modules');
    }
}
