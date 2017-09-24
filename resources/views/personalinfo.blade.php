@extends ('cherrylayout.app')

@section('title', 'PERSONAL INFO | '.config('app.name'))

@section ('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('account')
	@include('cherrylayout.accountNavLayout')
	<div class="container">
		<div class="row">
			<div class="personalinfo">
				<h5 style="text-align: center; font-weight: 600; font-size: 24px;color: black">Личные сведения</h5>
				<table class="table-bordered" >
					<thead></thead>
					<tbody>
						<tr>
							<td>Эл. Почта</td>
							<td>{{session('email')}}</td>
						</tr>
						<tr>
							<td>Имя</td>
							<td>{{session('user')}}</td>
						</tr>
						<tr>
							<td>Номер телефона</td>
							<td>{{session('phone')}}</td>
						</tr>
						<tr>
							<td>Адрес доставки</td>
							<td>{{session('address')}}</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<div class="col-md-4 btn btn-login" style="margin: 20px">РЕДАКТИРОВАТЬ</div>
					<div class="col-md-4 btn btn-register" style="margin: 20px">ИЗМЕНИТЬ ПАРОЛЬ</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection