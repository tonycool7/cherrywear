@extends('cherrylayout.app')

@section('title', 'ERROR | '.config('app.name'))

@section('navigation')
	@include('cherrylayout.navigator_error')
@endsection

@section('error')
	@include('cherrylayout.error')
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection