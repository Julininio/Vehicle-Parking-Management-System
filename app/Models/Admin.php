<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'AdminName',
        'UserName',
        'MobileNumber',
        'Security_Code',
        'Email',
        'Password'
    ];

    protected $hidden = [
        'Password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['Password'] = bcrypt($value);
    }

}
