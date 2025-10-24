@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">
      <h1>Welcome to the Students Module</h1>
      <p class="lead">This is your homepage where you can manage student profiles and perform related actions.</p>
      <x-button type="primmary" text="Go to Student List" onclick="window.location.href='{{ route('students.index') }}'" />
    </div>

    <x-alert text="Sample Data" type="success" message="Data initiated successfully" />
@endsection

