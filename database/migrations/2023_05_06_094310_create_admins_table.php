<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('admin', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->id('ID');
        //     $table->string('AdminName');
        //     $table->string('UserName');
        //     $table->string('MobileNumber', 10);
        //     $table->string('Security_Code', 55)->nullable(false);
        //     $table->string('Email');
        //     $table->string('Password', 120);
        //     $table->timestamp('AdminRegdate')->default(new Expression('CURRENT_TIMESTAMP'));

        //     // TODO; add default values for the admin user. should i move this to the seed??
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
