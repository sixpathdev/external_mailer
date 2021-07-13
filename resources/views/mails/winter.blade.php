@extends('layout')
@section('content')
    <div>
        <div class="text_center">{{'Winter Contact Form'}}</div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Vessel Location: {{$locationOfVessel}}</li>
        </ul>
    </div>
@endsection
