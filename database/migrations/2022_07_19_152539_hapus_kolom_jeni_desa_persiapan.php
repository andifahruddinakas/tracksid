<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HapusKolomJeniDesaPersiapan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_regions', function ($table) {
            $table->dropColumn('jenis');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_regions', function (Blueprint $table) {
            $table->integer('jenis')->default('0')->after('new_region_name');
        });

    }
}
