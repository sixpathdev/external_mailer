@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Diving Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Summary: {{$option}}</li>
        </ul>
    </div>
@endsection
