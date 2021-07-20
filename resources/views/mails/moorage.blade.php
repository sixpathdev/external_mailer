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
            <li style="margin-bottom: 10px;">Types</li>
            <li>Basic Type: {{$type}}</li>
            <li>Transient Type: {{$type}}</li>
            <li>Live Abroad Type: {{$type}}</li>
            <li>Commercial Type: {{$type}}</li>
        </ul>
    </div>
@endsection
