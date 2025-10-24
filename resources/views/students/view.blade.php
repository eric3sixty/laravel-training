@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <h2 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">View Student</h2>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <img src="{{ $data->photo_url }}" class="w-full h-56 object-cover" alt="Student Photo">
                <h5 class="text-lg font-semibold text-gray-900 mb-2">{{ $data->name }}</h5>
                <p class="text-gray-600 mb-4">{{ $data->course }} - {{ $data->year_level }}</p>
                <p class="text-gray-600 mb-4">{{ $data->address }}</p>
                <p class="text-gray-600 mb-4">{{ $data->grade }}</p>
                <p class="text-gray-600 mb-4">{{ $data->email }}</p>
                <p class="text-gray-600 mb-4">{{ $data->photo_url }}</p>
                <x-primary-button text="Edit" onclick="window.location.href='{{ route('students.edit', $data->id) }}'">{{__('Edit')}}</x-primary-button>
                <x-danger-button text="Delete" onclick="window.location.href='{{ route('students.destroy', $data->id) }}'">{{__('Delete')}}</x-danger-button>
                <x-secondary-button text="Back to Students List" type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('students.index') }}'">{{__('Back to Students List')}}</x-secondary-button>

                <x-primary-button text="Send Test Mail" onclick="window.location.href='{{ route('mail-test') }}'">{{__('Send Test Mail')}}</x-primary-button>
            </div>
        </div>
    </div>
@endsection
