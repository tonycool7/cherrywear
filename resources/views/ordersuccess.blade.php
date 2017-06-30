@extends ('cherrylayout.app')

@section('title', 'ЗАКАЗЫ | NORD ELK')

@section ('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('account')
	@include('cherrylayout.accountNavLayout')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h4>Заказ принят, Вы получите ваш заказ в течение 100 лет по указанному адресу в вашем аккаунте.</h4>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection