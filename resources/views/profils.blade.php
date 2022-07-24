@extends('layouts.dashboardLayout')

@section('content')


        @foreach ( $dataProfilName as $element)

        <h2>{{ $element->firstName }} </h2>
        <p> My name is {{ $element->firstName }} {{ $element->lastName }} <br/>
            I work in {{$element->company}}<br/>
            {{$element->message}}<br/>
            Contact-me in : {{$element->email}} <br/>
        </p>
        <br/>

        @endforeach

@endsection
