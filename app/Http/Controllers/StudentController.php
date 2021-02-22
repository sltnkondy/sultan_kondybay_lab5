<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentName()
    {
    	return view('first', ['name' => 'Sultan Kondybay']);
    }

    public function studentDOB()
    {
    	return view('third') -> with("dateOfBirth", "15/10/2002");
    }

    public function studentAge()
    {
    	return view('second',compact(18));
    }
}
