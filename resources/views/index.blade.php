@extends('cherrylayout.app')

@section('title', 'NORD ELK')

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('slides')
	@include('cherrylayout.slides')
@endsection

@section('carousel')
	@include('cherrylayout.carousel')
@endsection

@section('knowmore')
	@include('cherrylayout.knowmore')
@endsection

@section('parallax')
	@include('cherrylayout.parallax')
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection
