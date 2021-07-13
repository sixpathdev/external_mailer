@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Part Acquisition Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Detailed list of parts required: {{$detail}}</li>
        </ul>
    </div>
@endsection
