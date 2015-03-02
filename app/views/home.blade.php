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
