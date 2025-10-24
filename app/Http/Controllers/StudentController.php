<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class StudentController extends Controller
{
    public function index()
    {
        $data = DB::table('students')->get();

        return view('students.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $course = $request->input('course');
        $year_level = $request->input('year_level');
        $grade = $request->input('grade');
        $email = $request->input('email');
        $photo_url = $request->input('photo_url');
        $data_add = DB::table('students')->insert([
            'name' => $name,
            'address' => $address,
            'course' => $course,
            'year_level' => $year_level,
            'grade' => $grade,
            'email' => $email,
            'photo_url' => $photo_url
        ]);

        $data = DB::table('students')->get();
        return view('students.index', compact('data_add', 'data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('students')->where('id', $id)->first();
        return view('students.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('students')->where('id', $id)->first();
        return view('students.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $course = $request->input('course');
        $year_level = $request->input('year_level');
        $grade = $request->input('grade');
        $email = $request->input('email');
        $photo_url = $request->input('photo_url');

        $data = DB::table('students')->where('id', $id)->update([
            'name' => $name,
            'address' => $address,
            'course' => $course,
            'year_level' => $year_level,
            'grade' => $grade,
            'email' => $email,
            'photo_url' => $photo_url
        ]);

        $data = DB::table('students')->get();
        return view('students.index', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('students')->where('id', $id)->delete();
        $data = DB::table('students')->get();
        return view('students.index', compact('data'));

    }

    // mail test
    public function mailTest()
    {
        $data = DB::table('students')->where('id', 1)->first();
        $subject = 'Test Mail';
        Mail::to('noxire@gmail.com')->send(new TestMail($data, $subject));
        return redirect()->route('students.show', 1)->with('success', 'Mail sent successfully');
    }
}
