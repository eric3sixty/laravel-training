@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">Edit Course</h2>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form class="form-horizontal" method="POST" action="{{ route('courses.update', $course->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <x-input-label for="course_code" :value="__('Course Code')" />
                        <x-text-input id="course_code" name="course_code" type="text" class="mt-1 block w-full" :value="old('course_code', $course->course_code)" required autofocus autocomplete="course_code" />
                        <x-input-error class="mt-2" :messages="$errors->get('course_code')" />
                    </div>
                    <div class="mb-3">
                        <x-input-label for="course_description" :value="__('Course Description')" />
                        <x-text-input id="course_description" name="course_description" type="text" class="mt-1 block w-full" :value="old('course_description', $course->course_description)" required autofocus autocomplete="course_description" />
                        <x-input-error class="mt-2" :messages="$errors->get('course_description')" />
                    </div>
                    <div class="mb-3">
                            <x-input-label for="photo_url" :value="__('Photo URL')" />
                            <x-text-input id="photo_url" name="photo_url" type="file" class="mt-1 block w-full" :value="old('photo_url', $course->photo_url)" required autofocus autocomplete="photo_url" />
                            <x-input-error class="mt-2" :messages="$errors->get('photo_url')" />
                            <div class="mt-2">
                                @if ($course->photo_url)
                                    <img src="{{ asset('storage/' . $course->photo_url) }}" alt="Course Photo" class="img-fluid" style="width: 100px; height: 100px;">
                                @else
                                    <span class="text-muted">No photo</span>
                                @endif
                            </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end gap-2 mt-4">
                        <x-primary-button text="Update Course" type="submit">{{__('Update Course')}}</x-primary-button>
                        <x-secondary-button text="Cancel" type="button" onclick="window.location.href='{{ route('courses.index') }}'">{{__('Cancel')}}</x-secondary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
