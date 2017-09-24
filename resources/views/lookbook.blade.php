@extends('cherrylayout.app')

@section('title', 'CART | '.config('app.name'))

@section('navigation')
    @include('cherrylayout.navigator')
@endsection


@section('lookbook')
    @include('cherrylayout.lookbook')
@endsection


@section('footer')
    @include('cherrylayout.footer2')
@endsection