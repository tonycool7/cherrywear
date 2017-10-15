@extends ('cherrylayout.app')

@section('title', 'ЗАКАЗЫ | '.config('app.name'))

@section ('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('account')
	@include('cherrylayout.accountNavLayout')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h4>Ваш заказ будет доставлен по указанному адресу в течение 5 рабочих дней. Вам перезвонят для подтверждения заказа.</h4>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection