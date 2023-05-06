<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vcategory', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id('ID');
            $table->string('VehicleCat');
            $table->string('shortDescription');
            $table->timestamp('CreationDate')->default(new Expression('CURRENT_TIMESTAMP'));


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vcategory');
    }
};
