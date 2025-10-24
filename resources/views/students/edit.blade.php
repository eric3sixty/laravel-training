@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <h2 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">Edit Student</h2>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="post" action="{{ route('students.update', $data->id) }}" class="mt-6 space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $data->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $data->address)" required autocomplete="address" />
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>
                    <div>
                        <x-input-label for="course" :value="__('Course')" />
                        <x-text-input id="course" name="course" type="text" class="mt-1 block w-full" :value="old('course', $data->course)" required autocomplete="course" />
                        <x-input-error class="mt-2" :messages="$errors->get('course')" />
                    </div>
                    <div>
                        <x-input-label for="year_level" :value="__('Year Level')" />
                        <x-text-input id="year_level" name="year_level" type="text" class="mt-1 block w-full" :value="old('year_level', $data->year_level)" required autocomplete="year_level" />
                        <x-input-error class="mt-2" :messages="$errors->get('year_level')" />
                    </div>
                    <div>
                        <x-input-label for="grade" :value="__('Grade')" />
                        <x-select name="grade" :options="['90', '85', '80', '95']" class="mt-1 block w-full" :value="old('grade', $data->grade)" required autocomplete="grade" />
                        <x-input-error class="mt-2" :messages="$errors->get('grade')" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $data->email)" required autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                    <div>
                        <x-input-label for="photo_url" :value="__('Photo URL')" />
                        <x-text-input id="photo_url" name="photo_url" type="text" class="mt-1 block w-full" :value="old('photo_url', $data->photo_url)" required autocomplete="photo_url" />
                        <x-input-error class="mt-2" :messages="$errors->get('photo_url')" />
                    </div>
                    <div class="flex items-center gap-4 justify-end mt-4">
                        <x-primary-button text="Update Student" type="submit">{{__('Update Student')}}</x-primary-button>
                        <x-secondary-button text="Back to Students List" type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('students.index') }}'">{{__('Back to Students List')}}</x-secondary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
