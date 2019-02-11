<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActiInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acti_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->string('object');
            $table->string('plotter');
            $table->string('sponsor');
            $table->string('locale');
        });
        $info = new \App\Acti_info();
        $info->content = 'dine together';
        $info->object = 'All members of TECH F5VE';
        $info->plotter = 'XXX';
        $info->sponsor = 'TECH F5VE';
        $info->locale = 'Near Jiangsu University';

        $info->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acti_info');
    }
}
