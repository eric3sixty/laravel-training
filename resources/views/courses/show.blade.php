@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">Course</h2>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <img src="{{ asset('storage/' . $course->photo_url) }}" class="w-full h-56 object-cover" alt="Course Photo">
            </div>
            <h5 class="text-lg font-semibold text-gray-900 mb-2">{{ $course->course_code }}</h5>
            <p class="text-gray-600 mb-4">{{ $course->course_description }}</p>
            <x-primary-button text="Edit" onclick="window.location.href='{{ route('courses.edit', $course->id) }}'">{{__('Edit')}}</x-primary-button>
            <x-danger-button text="Delete" onclick="window.location.href='{{ route('courses.destroy', $course->id) }}'">{{__('Delete')}}</x-danger-button>
            <x-secondary-button text="Back to Courses List" type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('courses.index') }}'">{{__('Back to Courses List')}}</x-secondary-button>
        </div>
    </div>
@endsection

