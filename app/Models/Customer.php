<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// clint data will be store to databas
// Customer object is created in customercontroller to assign data through object.  
class Customer extends Model
{
    use HasFactory;
    //model takes tablename and primarykey to intaract with database  
    protected $table = "customer";
    protected $primaryKey = "customer_id";
}
