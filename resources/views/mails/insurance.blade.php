@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Insurance Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Summary: {{$summary}}</li>
        </ul>
    </div>
@endsection
