<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $siswa_list = Student::all()->sortBy('nama_siswa');
        $jumlah_siswa = $siswa_list->count();
        // $createLink = $this->create();
        return view('student.index', compact('siswa_list', 'jumlah_siswa'));
    }

    public function show($id)
    {
        $siswa = Student::findOrFail($id);
        return view('student.show', compact( 'siswa'));
    }

    public function create()
    {
        return view('student.create');
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

    public function edit($id)
    {
        $siswa = Student::findOrFail($id);
        return view('student.edit', compact('siswa'));
    }

    public function update($id, Request $request)
    {
        // Find data
        $siswa = Student::findOrFail($id);

        // Update
        $siswa->update($request->all());
        return redirect('student');
    }
}
