@extends('layouts.main')

@section('content')
    <div class="container mx-auto bg-gray-100">
        <h2 class="font-semibold text-gray-900">
            Hello Admin
        </h2>
        <p>You Have received an email from :{{$name}}</p>
        <p>Here are the details:</p>
        <p>Name: {{$name}}</p>
        <p>Email: {{$email}}</p>
        <p>Message: {{$message}}</p>
        <p>Thank You.</p>
    </div>
@endsection