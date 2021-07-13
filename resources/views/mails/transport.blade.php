@extends('layout')
@section('content')
    <div>
        <div class="text_center"><b>{{'Transport Contact Form'}}</b></div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Start Location: {{$start_location}}</li>
            <li>End Location: {{$end_location}}</li>
            <li>Dry Weight: {{$dry_weight}}</li>
            <li>Boat Loa: {{$loa}}</li>
            <li>Beam: {{$beam}}</li>
            <li>Height: {{$height}}</li>
        </ul>
    </div>
@endsection
