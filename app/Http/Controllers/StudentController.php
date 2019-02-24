<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\StudentRequest;

use App\Student;

class StudentController extends Controller
{
    /*
     function to read and show all student entries

    */
    public function index()
    {
        return student::all();
    }

    /*
     function to create and show a new student entry

    */
    public function createNewStudent($name,$age,$address)
    {
        student::create(['name' => $name, 'age' => $age, 'address' => $address]); 
        return student::all();
    }

    /*
     function to read and show a particular student entry

    */
    public function read($name)
    {
         $result = student::where('name',$name)->get();
         return json_encode($result);          
    }
 
    /*
     function to update an existing student entry

    */
    public function update($name,$age,$address)
    {  
        student::where('name',$name)->update(['age' => $age, 'address' => $address]);
        return student::all();  
    }

    /*
     function to delete a particular student entry and show the remaining student entries

    */
    public function delete($name)
    {
        student::where('name', $name)->delete();
        return student::all();
    }
}
