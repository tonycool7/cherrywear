@extends ('cherrylayout.app')

@section('title', 'ACCOUNT | '.config('app.name'))

@section ('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('account')
	@include('cherrylayout.accountNavLayout')
	@include('cherrylayout.accountlayout')
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection