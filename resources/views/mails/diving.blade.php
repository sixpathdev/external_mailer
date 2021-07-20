@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Diving Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Basic Scraping: {{$bs}}</li>
            <li>Basic Inspection: {{$bi}}</li>
            <li>Anode CHange: {{$ac}}</li>
            <li>Minor Repair: {{$mr}}</li>
        </ul>
    </div>
@endsection
