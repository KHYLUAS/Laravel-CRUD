<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = '_employees_tbl';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'FirstName',
        'LastName',
        'DateofBirth',
        'Phone',

    ];

    use HasFactory;
}
