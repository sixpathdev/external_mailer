@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Financing Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Summary: {{$amount}}</li>
            <li>Summary: {{$spec}}</li>
        </ul>
    </div>
@endsection
