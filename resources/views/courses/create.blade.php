@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">
        <h1>Add Course</h1>
        <div class="container text-center my-5 w-50 mx-auto" style="border: 1px solid #000; padding: 20px; border-radius: 10px; background-color: #f8f9fa;">
            <form class="form-horizontal" method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="course_code">Course Code</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="course_code" name="course_code" required>
                        @error('course_code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="course_description">Course Description</label>
                    </div>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="course_description" name="course_description" required></textarea>
                        @error('course_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="photo_url">Photo URL</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="photo_url" name="photo_url">
                        @error('photo_url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Add Course</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('courses.index') }}'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
