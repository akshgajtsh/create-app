<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVacationCancelsTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacation_cancels', function (Blueprint $table) {
            $table->date('vacation_start')->nullable();
            $table->date('vacation_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacation_cancels', function (Blueprint $table) {
            $table->date('vacation_start');
            $table->date('vacation_end');
        });
    }
}
