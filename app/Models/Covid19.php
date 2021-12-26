<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    use HasFactory;
    //ผูกกับตาราง covid19s ใน PHPMYADMIN
    protected $table = "covid19s";
}
