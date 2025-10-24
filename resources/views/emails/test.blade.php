<x-mail::message>
    <h1>{{ $subject }}</h1>
    <h1>Hello {{ $data->name }}</h1>
    <p>Your grade is {{ $data->grade }}</p>
    <p>Your course is {{ $data->course }}</p>
    <p>Your year level is {{ $data->year_level }}</p>
    <p>Your address is {{ $data->address }}</p>
    <p>Your email is {{ $data->email }}</p>
    <p>Your photo url is {{ $data->photo_url }}</p>
</x-mail::message>
