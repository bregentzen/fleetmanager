<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->string('captain')->nullable();
            $table->float('length')->nullable();
            $table->integer('capacity_teu')->nullable();
            $table->integer('year_built')->nullable();
        });

        DB::table('ships')->update(['captain' => 'default', 'length' => 0, 'capacity_teu' => 0, 'year_built' => 2000]);

        Schema::table('ships', function (Blueprint $table) {
            $table->string('captain')->nullable(false)->change();
            $table->float('length')->nullable(false)->change();
            $table->integer('capacity_teu')->nullable(false)->change();
            $table->integer('year_built')->nullable(false)->change();
        });
    }

    public function down()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->dropColumn(['captain', 'length', 'capacity_teu', 'year_built']);
        });
    }
};
