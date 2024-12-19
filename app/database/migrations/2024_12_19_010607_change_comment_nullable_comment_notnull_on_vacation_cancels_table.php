<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCommentNullableCommentNotnullOnVacationCancelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacation_cancels', function (Blueprint $table) {
            $table->string('comment')->nullable()->change();
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
            $table->string('comment')->nullable()->change();
        });
    }
}
