<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    public $timestamps = true;
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'contact', 'date_of_birth', 'gender'];
}
