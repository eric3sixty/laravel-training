@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <h1>Courses</h1>
            <x-button type="primary" text="Add Course" onclick="window.location.href='{{ route('courses.create') }}'" />
        </div>
        <br>

        <table class="table table-striped overflow-x-scroll">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th width="40%">Course Description</th>
                    <th width="10%">Photo URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td style="text-align: left;">{{ $course->course_code }}</td>
                        <td width="40%" style="text-align: left;">{{ $course->course_description }}</td>
                        <td width="10%" style="text-align: left;">
                            @if($course->photo_url)
                                <img src="storage/{{ $course->photo_url }}" alt="Course Photo" class="img-fluid" style="width: 100px; height: 100px;">
                            @else
                                <p>
                                    No photo available
                                </p>
                            @endif
                        </td>
                        <td>

                            <div class="d-flex flex-row gap-2">
                                <x-primary-button text="View" onclick="window.location.href='{{ route('courses.show', $course->id) }}'">{{__('View')}}</x-primary-button>
                                <x-secondary-button text="Edit" onclick="window.location.href='{{ route('courses.edit', $course->id) }}'">{{__('Edit')}}</x-secondary-button>


                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <!-- <button type="submit" style="height: 30px;" class="btn btn-sm btn-danger btn-rounded" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button> -->
                                <x-danger-button text="Delete" onclick="return confirm('Are you sure you want to delete this course?')">{{__('Delete')}}</x-danger-button>
                            </form>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
