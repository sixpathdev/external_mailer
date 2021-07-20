@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Brokerage Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Firm Name: {{$firm_name}}</li>
            <li>Email: {{$email}}</li>
            <li>Title: {{$title}}</li>
            <li>Message: {{$message}}</li>
            <li>Price Range: {{$price_range}}</li>
        </ul>
    </div>
@endsection
