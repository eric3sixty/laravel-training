<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class StudentDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return view('students.view', compact('data_add', 'data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        return view('students.view', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('students')->where('id', $id)->delete();
        $data = DB::table('students')->get();
        return view('students.view', compact('data'));

    }
}
