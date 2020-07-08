<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePisseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pisseries', function (Blueprint $table) {
            $table->id("id",36);
            $table->string("nom",20);
            $table->string("tel",15);
            $table->text("picture");
            $table->string("codeGroup",10);
            $table->dateTime("dateConnexion");
            $table->integer("activation");
            $table->string("type",10);
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
        Schema::dropIfExists('pisseries');
    }
}
