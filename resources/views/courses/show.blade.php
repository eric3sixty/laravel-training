@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">
        <h1>Course</h1>
        <div class="container text-center my-5 w-50 mx-auto" style="border: 1px solid #000; padding: 20px; border-radius: 10px; background-color: #f8f9fa;">
            <h2>{{ $course->course_code }}</h2>
            <h3>{{ $course->course_description }}</h3>
            <img src="{{ $course->photo_url }}" class="img-fluid" alt="Course Photo">
        </div>
        <x-button type="primary" text="Edit" onclick="window.location.href='{{ route('courses.edit', $course->id) }}'" />
        <x-button type="danger" text="Delete" onclick="window.location.href='{{ route('courses.destroy', $course->id) }}'" />
    </div>
@endsection

