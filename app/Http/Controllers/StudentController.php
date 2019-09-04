<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $page = 'student';
        $students = ['Edd', 'John Marison', 'Mary Akh', 'Broke Lesnar'];
        // $createLink = $this->create();
        return view('student.index', compact('page','students'));
    }

    public function create()
    {
        $page = 'student';
        return view('student.create',compact('page'));
    }

    public function store(Request $request)
    {
        $student = $request->all();
        return $student;
    }

}
