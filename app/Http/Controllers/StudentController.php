<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Validator;

class StudentController extends Controller
{
    public function index()
    {
        $siswa_list = Student::all()->sortBy('nama_siswa');
        $siswa_list_page = Student::orderBy('nama_siswa', 'asc')->paginate(5);
        $jumlah_siswa = $siswa_list->count();
        $jumlah_siswa_halaman = $siswa_list_page->count();
        // $createLink = $this->create();
        return view('student.index', compact('siswa_list', 'jumlah_siswa', 'siswa_list_page', 'jumlah_siswa_halaman'));
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

        // Student::create($request->all());

        // get input
        $input = $request->all();

        // config validator
        $validator = Validator::make($input, [
            'nisn'          => 'required|size:4|unique:student,nisn',
            'nama_siswa'    => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        if ($validator->fails()) {
            return redirect('student/create')
            ->withInput()
            ->withErrors($validator);
        }else {
            Student::create($input);
            return redirect('student');
        }
    }

    public function edit($id)
    {
        $siswa = Student::findOrFail($id);
        return view('student.edit', compact('siswa'));
    }

    public function update($id, Request $request)
    {
        // // Find data
        // $siswa = Student::findOrFail($id);

        // // Update
        // $siswa->update($request->all());
        // return redirect('student');

        // find student
        $siswa= Student::findOrFail($id);
        // get input
        $input = $request->all();

        // config validator
        $validator = Validator::make($input, [
            'nisn'          => 'required|size:4|unique:student,nisn,' . $request->id,
            'nama_siswa'    => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        if ($validator->fails()) {
            return redirect('student/' . $id . '/edit')
            ->withInput()
            ->withErrors($validator);
        }else {
            $siswa->update($request->all());
            return redirect('student');
        }
    }

    public function destroy($id)
    {
        // Find data
        $siswa = Student::findOrFail($id);
        // Delete data
        $siswa->delete();
        return redirect('student');
    }

    public function dateMutator()
    {
        $siswa = Student::findOrFail(2);
        $nama_siswa = $siswa->nama_siswa;
        $tanggal_lahir = $siswa->tanggal_lahir;
        $ulang_tahun = $siswa->tanggal_lahir->addYears(30)->format('d-m-Y');
        return "Umur {$siswa->nama_siswa} adalah {$siswa->tanggal_lahir->age} tahun. Ulang tahun {$nama_siswa} ke-30 akan jatuh pada {$ulang_tahun}.";
    }

}
