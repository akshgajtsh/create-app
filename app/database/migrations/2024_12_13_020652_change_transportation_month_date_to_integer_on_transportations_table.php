<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTransportationMonthDateToIntegerOnTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transportations', function (Blueprint $table) {
            $table->integer('transportation_month')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transportations', function (Blueprint $table) {
            $table->date('transportation_month')->change();
        });
    }
}
