<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_Info extends Model
{
    use HasFactory;
    protected $table = 'vehicle__infos';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'ParkingNumber',
        'VehicleCategory',
        'VehicleCompanyname',
        'RegistrationNumber',
        'OwnerName',
        'OwnerContactNumber',
        'ParkingCharge',
        'Remark',
        'Status'
    ];

}
