@extends('cherrylayout.app')

@section('title', 'CHECKOUT | '.config('app.name'))

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('cart')
	@include('cherrylayout.checkoutlayout')
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection