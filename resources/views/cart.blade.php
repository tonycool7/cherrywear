@extends('cherrylayout.app')

@section('title', 'CART | CHERRYWEAR')

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('cart')
	@include('cherrylayout.cartlayout')
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection