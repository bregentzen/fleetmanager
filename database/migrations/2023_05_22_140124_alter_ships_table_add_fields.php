<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::table('ships', function (Blueprint $table) {
            $table->integer('year')->after('brt')->default(1900);
            $table->integer('passengers')->after('year')->default(0);
            $table->integer('decks')->after('passengers')->default(1);
            $table->decimal('speed', 4,2)->after('decks')->default(0.0);
            $table->string('home_harbour')->after('speed')->default('');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('ships', function (Blueprint $table) {
            $table->dropColumn('year');
            $table->dropColumn('passengers');
            $table->dropColumn('decks');
            $table->dropColumn('speed');
            $table->dropColumn('home_harbour');
            
        });
    }
};
