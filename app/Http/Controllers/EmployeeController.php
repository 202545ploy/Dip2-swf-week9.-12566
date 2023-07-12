<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Fetch the eloquent table
    public function index()
    {
        $employee = Employee::all();
        return view('pages.employee.index',compact('employee'));
    }
}
