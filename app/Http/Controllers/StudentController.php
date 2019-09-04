<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $page = 'student';
        $students = ['Edd', 'John Marison', 'Mary Akh', 'Broke Lesnar'];
        return view('student.index', compact('page','students'));
    }
}
