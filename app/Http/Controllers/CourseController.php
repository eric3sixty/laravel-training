<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $validated = $request->validate([
            'course_code' => ['required', 'string', 'max:255'],
            'course_description' => ['required', 'string', 'max:255'],
            'photo_url' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($request->hasFile('photo_url')) {
            $validated['photo_url'] = $request->file('photo_url')->store('courses', 'public');
        }

        Course::create($validated);
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validated = $request->validate([
            'course_code' => ['required', 'string', 'max:255'],
            'course_description' => ['required', 'string', 'max:255'],
            'photo_url' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($request->hasFile('photo_url')) {
            if ($course->photo_url) {
                Storage::disk('public')->delete($course->photo_url);
            }
            $validated['photo_url'] = $request->file('photo_url')->store('courses', 'public');
        }


        $course->update($validated);
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if ($course->photo_url) {
            Storage::disk('public')->delete($course->photo_url);
        }
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
