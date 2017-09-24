@extends('cherrylayout.app')

@section('title', 'CART | '.config('app.name'))

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('cart')
	@include('cherrylayout.cartlayout')
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection