@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Winter Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Boat Loa: {{$loa}}</li>
            <li>Preferred location: {{$location}}</li>
            <li>Type: {{$type}}</li>
        </ul>
    </div>
@endsection
