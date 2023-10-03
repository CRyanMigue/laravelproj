<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    //to retrive all students
    $students = \App\Models\Students::all();

    //create new student record
    $student = \App\Models\Students();
    $student->name = 'John Doe';
    $student->email = 'John@example.com';
    $student->save();

    //update a student record
    $student = \App\Models\Students::find(1); // Assuming the student with ID 1 exists
    $student->name = 'Updated Name';
    $student->save();

    //delete a student record
    $student = \App\Models\Students::find(1); // Assuming the student with ID 1 exists
    $student->delete();
    
    use HasFactory;
}
