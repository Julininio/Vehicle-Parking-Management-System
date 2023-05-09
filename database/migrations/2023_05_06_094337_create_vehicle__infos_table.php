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
        Schema::create('vehicle__infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id('ID');
            $table->string('ParkingNumber')->nullable(true);
            $table->string('VehicleCategory')->nullable(false);
            $table->string('VehicleCompanyname');
            $table->string('RegistrationNumber');
            $table->string('OwnerName');
            $table->string('OwnerContactNumber', 10);
            $table->string('ParkingCharge')->nullable(true);
            $table->string('Remark')->nullable(true);
            $table->string('Status', 5)->nullable(true);
            $table->timestamp('InTime')->default(new Expression('CURRENT_TIMESTAMP'));
            $table->timestamp('OutTime')->default(new Expression('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle__infos');
    }
};
