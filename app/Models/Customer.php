<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //model takes tablename and primarykey to intaract with database  
    protected $table = "customer";
    protected $primaryKey = "customer_id";
}
