<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VCategory extends Model
{
    use HasFactory;
    protected $table = 'vcategory';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;
}
