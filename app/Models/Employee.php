<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $primaryKey = 'EMPLOYEE_ID';
    // public $timestamps = false;
    const CREATED_AT = 'C_AT';
    const UPDATED_AT = 'U_AT';
}
