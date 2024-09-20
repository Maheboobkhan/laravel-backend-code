<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user-table', function (Blueprint $table) {
            $table->id();
        $table->string('name');
        $table->string('mobile_number');
        $table->string('email')->unique();
        $table->json('messages')->nullable();
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
        // Schema::dropIfExists('user-table');
        Schema::table('user-table', function (Blueprint $table) {
            $table->dropColumn('messages'); // Remove the column
        });
    }
};
