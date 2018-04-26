@extends('layouts.masterLayout')

@section('content')
	@foreach($businesses as $business)
		<p>{{ $business->business_name }}</p>
		<a href="/businesses/{{ $business->id }}/edit">EDIT</a>
	@endforeach
@endsection