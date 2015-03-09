@extends('layout/master')

@section('head-title')
	<title>{{ $city->city }}, {{ $city->state }}</title>
@stop

@section('head-assets')
	@parent
	<link rel="stylesheet" href="<?php echo asset('/css/cities.css'); ?>">
@stop

@section('title')
	<h1>{{ $city->city }}</h1>
@stop

@section('navigation')
	<ul>
		<li><a href="{{ route('home') }}">Home</a></li>
		@foreach ($trip->cities as $current)
			@if ($current->city_id !== $city->city_id)
				<li><a href="{{ route('city', array('id' => $current->city_id)) }}">{{ $current->city }}</a></li>
			@endif
		@endforeach
	</ul>
@stop

@section('content')
	<div class="itinerary_wrapper">
		<h3>Itinerary</h3>
		@if (isset($city->itinerary))
			@foreach ($city->itinerary as $day)
				<p>
					<time datetime="{{ $day['datetime'] }}">{{ $day['date'] }}</time><br>
					<span>{{ $day['details'] }}</span>
				</p>
			@endforeach
		@else
			<p>No itinerary for this city yet.</p>
		@endif
	</div>

	{{ $city->weather or null }}

	@if (!isset($destinations))
		<p class="city_disclaimer">Click <a href="">&gt;HERE&lt;</a> to start adding destinations to this page.</p>
	@else
		@foreach ($destinations as $name => $destination)
			<div class="destination" id="destination-{{ $destination->destination_id }}">
				<h2 class="venue-name"><a href="">{{ $destination->destination_name }}</a></h2>
				<section class="venue">
					<img src="{{ $destination->firstImage }}">
					@foreach ($destination->tags as $tag)
						<h5>{{ $tag->tag }}</h5>
					@endforeach
					<a href="" target="_blank">{{ $destination->url }}</a>
				</section>

				<section class="reviews">
					@if (!empty($destinations[$name]['users']))
						$rand = rand(0, count($city->destinations[$name]['users']) - 1);
						$user = $city->destinations[$name]['users'][$rand];
						$uname = strtolower($user['username']);

						<article class="{{ $uname }}">
							<img class="{{ $uname }}icon" src="/trip/assets/img/{{ $uname }}frame.jpg">
							<h4>{{ ucwords($uname) }} says...</h4>
							<span>{{ $user['score'] }}</span>
							<p>{{ $user['review'] }}</p>
						</article>
					@endif
				</section>
			</div>
		@endforeach
	@endif
@stop

