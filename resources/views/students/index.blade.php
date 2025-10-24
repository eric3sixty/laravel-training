@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">List of Students</h2>
            <a href="{{ route('students.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition-colors duration-200 font-medium">Create Student</a>
        </div>

        <div class="grid gap-6 w-full" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            @foreach($data as $row)
                <div class="bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden w-full">
                    <img src="{{ $row->photo_url }}" class="w-full h-56 object-cover" alt="Student Photo">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold text-gray-900 mb-2">{{ $row->name }}</h5>
                        <p class="text-gray-600 mb-4">{{ $row->course }} - {{ $row->year_level }}</p>
                        <div class="d-flex flex-row gap-2">
                            <x-primary-button text="View" onclick="window.location.href='{{ route('students.show', $row->id) }}'">{{__('View')}}</x-primary-button>
                            <x-secondary-button text="Edit" onclick="window.location.href='{{ route('students.edit', $row->id) }}'">{{__('Edit')}}</x-secondary-button>
                            <form action="{{ route('students.destroy', $row->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <x-danger-button text="Delete" onclick="return confirm('Are you sure you want to delete this student?')">{{__('Delete')}}</x-danger-button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @endsection
