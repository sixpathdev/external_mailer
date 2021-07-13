@extends('layout')
@section('content')
    <div>
        <div class="text_center">{{'Halout Contact Form'}}</div>
        <ul>
            <li>Name: {{$name}}</li>
            <li>Phone: {{$phone}}</li>
            <li>Email: {{$email}}</li>
            <li>Boat Model: {{$boatmodel}}</li>
            <li>Dry Weight: {{$dryweight}}</li>
            <li>LOA: {{$loa}}</li>
            <li>Beam: {{$beam}}</li>
            <li>Height: {{$height}}</li>
        </ul>
    </div>
@endsection
