<div class="container">
	<h2 style="text-align: center" class="">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
</div>
<div class="container">
	<hr>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="checkout-conclusion logreg">
				<h5 class="">УЧЕТНАЯ ЗАПИСЬ</h5>
				@if (session('login') != 'true')
				<div class="checkout-conclusion-content">
					<div class="row">
						<div class="col-md-6">
							<div class="checklogin">
								<h4 class="bold">Returning customer</h4>
								<form role="form" class="form-horizontal" method="POST" id="login-form2"> 
									<div class="form-group">
										<label>ЭЛ. ПОЧТА</label>
										<input type="email" name="email" class="form-control l2-email" placeholder="E-mail">
									</div>
									<div class="form-group">
										<label>ПАРОЛЬ</label>
										<input type="password" name="password" class="form-control l2-password" placeholder="**********">
									</div>
									<input type="submit" value="ВОЙТИ" style="margin-left: -15px" class="btn btn-login">
									<div style="margin-left: -15px; margin-top: 5px"><a style="color: black" href="#">Забыли пароль?</a></div>
                   					<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
									
								</form>
							</div>
							<div class="checkreg">
								<h4 class="bold">УКАЖИТЕ ВАШИ ДАННЫЕ</h4>
								<form role="form" class="form-horizontal" method="POST" action="/reg"> 
									<div class="form-group">
										<label>Имя</label>
										<input type="text" name="name2" class="form-control" placeholder="Name">
									</div>
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
							<h4 class="bold">Я здесь впервые</h4>
							<p>Создайте новую учетную запись для более быстрого оформления заказа и получения последних новостей о тенденциях и преложений по эл. почте.</p>
							<br/><div class="btn btn-register check-reg">СОЗДАТЬ НОВУЮ УЧЕТНУЮ ЗАПИСЬ</div>
							<h4 class="bold">Customer</h4>
							<div class="btn btn-register check-log">ВОЙТИ</div>
						</div>
					</div>
				</div>
				@else
				<div style="padding: 20px;">
					<h4>ЛИЧНЫЕ СВЕДЕНИЯ</h4>
					<h4>Имя:</h4>
					<h6>{{session('user')}}</h6>
					<h4>Эл. Почта</h4>
					<h6>{{session('email')}}</h6>
					<h4>Номер телефона</h4>
					<h6>{{session('phone')}}</h6>
					<h4>Адрес доставки</h4>
					@if (session('address') == '')
					<form method="POST" action="/address">
						<input type="text" name="address" placeholder="address">
						<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />		
						<input type="submit" value="submit" class="btn btn-black">
					</form>
					@else
					<h6>{{session('address')}}</h6>
					@endif
					<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/shop-widget?account=410014717837422&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=seller&targets=%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7&default-sum=<?php if(isset($_SESSION['total'])) echo $_SESSION['total'] + 300;?>&button-text=02&successURL=google.com" width="450" height="198"></iframe>
					<br>
					<a class="btn btn-black" href="/ordered">доставка по оплате</a>
				</div>
				@endif
			</div>
		</div>
		<div class="col-md-4">
			<div class="cart-conclusion">
				<h5 class="">ВАШ ЗАКАЗ</h5>
				<div class="checkout-conclusion-content">
					
						<?php
							if(isset($_SESSION['cart'])){
								$keys = array_keys($_SESSION['cart']);
								$count = count($_SESSION['cart']);
								for($i = 1; $i<$count; $i++ ){
									echo "<div class='row'><div class='col-md-5'>
											<img src='images/products/{$_SESSION['cart'][$keys[$i]]['image']}'>
										</div>
										<div class='col-md-7'>
											<h3>{$_SESSION['cart'][$keys[$i]]['name']}</h3>
											<p>{$_SESSION['cart'][$keys[$i]]['price']} ₽</p>
											<p>Количество: {$_SESSION['cart'][$keys[$i]]['quantity']}</p>
											<p>Цвет: {$_SESSION['cart'][$keys[$i]]['color']}</p>
											<p>Размер: {$_SESSION['cart'][$keys[$i]]['size']}</h5>
											<p>Итого: ".$_SESSION['cart'][$keys[$i]]['price'] * $_SESSION['cart'][$keys[$i]]['quantity']." ₽</p>
										</div></div><br>";
								}
							}
						?>
				<!-- <div class="cart-conclusion-content"> -->
					<h6>СТОИМОСТЬ ЗАКАЗА: <span class="pull-right"><span class="amt"><?php if(isset($_SESSION['total'])) echo $_SESSION['total']; else echo 0;?></span> ₽</span></h6>
					<h6>ДОСТАВКА: <span class="pull-right">300 ₽</span></h6>
					<hr style="border:1px solid black ! important">
					<h6>ИТОГО: <span class="pull-right"><span class="total-amt"><?php if(isset($_SESSION['total'])) echo $_SESSION['total'] + 300;?></span> ₽</span></h6>
					<div>
						{{--<p>14-дневный период возврата товара, комиссия за возврат и возврат стоимости за неотправленный товар. Прочитать о  Прочитать о возврате и возмещении стоимости товара.</p>--}}
					</div>
				<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
</div>