@if (session('login') == true)
<div class="container user">
	<div class="row">
		<div class="col-md-4">
			<h3>Здравствуйте, !</h3>
			<p>Приветствуем Вас! Это — ваша персональная инфопанель CHERRWEAR, где Вы можете обновить Ваши персональные данные и платежные реквизиты, а также просмотреть информацию о Ваших заказах</p>
		</div>
		<div class="col-md-8">
			<h3>ЗАКАЗЫ</h3>
			<p>Заказы не найдены.</p>
			<p><a href="{{url('/')}}/orders" style="font-size: 11px; color: black">Посмотреть все заказы</a></p>
			<hr style="border: 1px solid black">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<h3>ЛИЧНЫЕ СВЕДЕНИЯ</h3>
			<h5>Имя:</h5>
			<p>{{session('user')}}</p>
			<h5>Эл. Почта</h3>
			<p>{{session('email')}}</p>
			<h5>Номер телефона</h5>
			<p>{{session('phone')}}</p>
			<a href="#" class="btn btn-login">СМОТРЕТЬ ЕЩЕ</a>
		</div>
		<div class="col-md-8">
			<h3>АДРЕСНАЯ КНИГА</h3>
			<p>{{session('address')}}</p>
			<hr style="border: 1px solid black">																																																																
		</div>												
	</div>
</div>
@else
<div class="container">
	<div class="row">
	<div class="col-md-6">
		<div class="checklogin">
			<h4 class="bold">Returning customer</h4>
			<form role="form" class="form-horizontal" id="login-form3" method="POST"> 
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control l3-email" placeholder="E-mail">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control l3-password" placeholder="**********">
				</div>
				<input type="submit" value="Login" style="margin-left: -15px" class="btn btn-login">
				<div style="margin-left: -15px; margin-top: 5px"><a style="color: black" href="#">Forgot login details?</a></div>
					<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
				
			</form>
		</div>
		<div class="checkreg">
			<h4 class="bold">УКАЖИТЕ ВАШИ ДАННЫЕ</h4>
			<form role="form" class="form-horizontal" method="POST" action="{{url('/')}}/reg"> 
				<div class="form-group">
					<label>Эл. Почта</label>
					<input type="email" name="email2" class="form-control" placeholder="E-mail">
				</div>
				<div class="form-group">
					<label>Телефон</label>
					<input type="phone" name="tel" class="form-control" placeholder="+79522643862">
				</div>
				<div class="form-group">
					<label>Пароль</label>
					<input type="password" name="password2" class="form-control" placeholder="**********">
				</div>
				<div class="form-group">
					<label>Повторить пароль</label>
					<input type="password" name="password_confirmation" class="form-control" placeholder="**********">
				</div>
				<div class="agree" style="margin-left: -16px;">
					<div>
						<input type="checkbox" name="agree2" value="agree"> 
					</div>
					<div>
						<p> Я хочу получать сообщения об эксклюсивных предположениях и новостях на свою почту и мне больше 16 лет.</p>
					</div>
				</div><br>
				<input type="submit" value="Присоединяйтесь к нам" style="margin-left: -15px; width: 100%" class="btn btn-login">
				<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />		
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<h4 class="bold">НОВЫЙ ПОКУПАТЕЛЬ</h4>
		<p>Создайте новую учетную запись, чтобы упростить процесс совершения покупок.</p>
		<div class="btn btn-register check-reg">REGISTER</div>
		<h4 class="bold">Customer</h4>
		<div class="btn btn-register check-log">LOGIN</div>
	</div>
</div>
</div>
@endif