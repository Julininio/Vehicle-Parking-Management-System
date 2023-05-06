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
        Schema::create('settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->string('c_name')->nullable(false);
            $table->string('c_email')->nullable(false);
            $table->string('c_website')->nullable(false);
            $table->string('c_address')->nullable(false);
            $table->timestamp('last_update')->default(new Expression('CURRENT_TIMESTAMP'))->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
