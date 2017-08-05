@extends ('cherrylayout.app')

@section('title', 'ACCOUNT | CHERRYWEAR')

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