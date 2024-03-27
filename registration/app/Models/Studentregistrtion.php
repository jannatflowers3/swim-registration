<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentregistrtion extends Model
{
    use HasFactory;
    protected $fillable = ['yourName','contactumber','emailAddress','address','contactPerson',
    'contactNumber',
    'dbirth',
    'studentNid',
    'studentAcademic',
    'gender',
    'brnNumber',
    'transactionId',
    'toamountPaid',];

}
