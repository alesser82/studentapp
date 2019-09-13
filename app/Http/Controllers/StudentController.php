<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $page = 'student';
        $siswa_list = Student::all()->sortBy('nama_siswa');
        $jumlah_siswa = $siswa_list->count();
        // $createLink = $this->create();
        return view('student.index', compact('page','siswa_list', 'jumlah_siswa'));
    }

    public function show($id)
    {
        $page = 'student';
        $siswa = Student::findOrFail($id);
        return view('student.show', compact('page', 'siswa'));
    }

    public function create()
    {
        $page = 'student';
        return view('student.create',compact('page'));
    }

    public function store(Request $request)
    {
        // $student = $request->all();
        // return $student;
        // $siswa = new Student;
        // $siswa->nisn = $request->nisn;
        // $siswa->nama_siswa = $request->nama_siswa;
        // $siswa->tanggal_lahir = $request->tanggal_lahir;
        // $siswa->jenis_kelamin = $request->jenis_kelamin;
        // $siswa->save();
        Student::create($request->all());
        return redirect('student');
    }

}
