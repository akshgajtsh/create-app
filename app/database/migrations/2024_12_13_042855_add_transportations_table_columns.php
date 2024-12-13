<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransportationsTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transportations', function (Blueprint $table) {
            $table->string('start_section')->after('transportation_confirm');
            $table->string('end_section')->after('start_section');
            $table->string('via_section')->nullable()->after('end_section');
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
            $table->string('start_section');
            $table->string('end_section');
            $table->string('via_section');
        });
    }
}
