@extends('layout/master')

@section('head-title')
	<title>{{ $trip->title }}</title>
@stop

@section('title')
	<h1>{{ $trip->title }}</h1>
@stop

@section('navigation')
	<ul>
		@foreach ($trip->cities as $city)
			<li><a href="{{ route('city', array('id' => $city->city_id)) }}">{{ $city->city }}</a></li>
		@endforeach
	</ul>
@stop

@section('content')
	<section class="flight_details">
	@foreach ($trip->flights as $flight)
		<header>{{ $flight->flight }}</header>
		<p><strong>Departure:</strong>{{ date('j M j \a\t H:i:s', strtotime($flight->time_departure)) }}</p>
		<p><strong>Arrival:</strong>{{ date('j M j \a\t H:i:s', strtotime($flight->time_arrival)) }}</p>
	@endforeach
	</section>
@stop
