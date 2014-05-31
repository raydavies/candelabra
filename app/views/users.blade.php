@extends('layout')

@section('content')
	@foreach($users as $user)
		<p>{{$user->name}} &lt;{{$user->email}}&gt;</p>
	@endforeach
@stop
