<nav class="container-fluid">
<div class="container-fluid">
	<div class="row header">
		<h1 class="text-center"><a title="{{config('app.name')}}" id="banner" href="/"><div>WRAPPED</div></a></h1><br>
		<div id="search-account">
			<div class="refresh">@if (session('login') != 'true')<span class="login">Войти</span> / <span class="register">Зарегистрироваться</span>&nbsp;<span class="glyphicon glyphicon-user"></span>@else <span class="account"><a href="/account">welcome {{session('user')}} </a></span><span class="logout">Выйти</span> @endif</div>
			<div class="login-container">
				<form role="form" id="login-form" method="POST" class="form-horizontal"> 
					<div class="form-group">
						<label>Эл. адрес</label>
						<input type="email" name="email" class="form-control l-email" placeholder="Эл. адрес" required autofocus>
					</div>
					<div class="form-group">
						<label>Пароль</label>
						<input type="password" name="password" class="form-control l-password" placeholder="**********">
					</div>
					<div class="p-error"></div>
					<input type="submit" value="Войти" class="btn btn-login">
					<hr>
                    <input name="_token" type="hidden" id="token_log" value="{{ csrf_token() }}" />
					<button class="btn btn-register join">Присоединяйтесь к нам</button>
				</form>
			</div>
			<div class="register-container">
				 <form class="form-horizontal" role="form" method="POST" id="reg-form">
					<div class="form-group">
						<label>Имя: </label>
						<input type="text" name="name2" id="reg-name" class="form-control" placeholder="Имя" required>
					</div>
					 <div class="form-group">
						 <label>Фамилия: </label>
						 <input type="text" name="surname" id="reg-sur" class="form-control" placeholder="Фамилия" required>
					 </div>
					 <div class="form-group">
						 <label>Адрес: </label>
						 <input type="text" name="address" id="reg-addr" class="form-control" placeholder="Адрес" required>
					 </div>
					 <div class="form-group">
						 <label>Город: </label>
						 <input type="text" name="city" id="reg-city" class="form-control" placeholder="Город" required>
					 </div>
					 <div class="form-group">
						 <label>Край / Область: </label>
						 <input type="text" name="region" id="reg-region" class="form-control" placeholder="Край / Область" required>
					 </div>
					 <div class="form-group">
						 <label>Почтовый индекс: </label>
						 <input type="text" name="postalcode" id="reg-index" class="form-control" placeholder="190000" required>
					 </div>
					 <div class="form-group">
						 <label>Страна: </label>
						 <input type="text" name="country" id="reg-country" class="form-control" placeholder="Страна" required>
					 </div>
					<div class="form-group">
						<label>Эл. адрес</label>
						<input type="email" name="email2" id="reg-email" class="form-control" placeholder="Эл. адрес" required>

					</div>
					<div class="form-group">
						<label>Телефон</label>
						<input type="phone" name="tel" id="reg-tel" class="form-control" placeholder="+79533456787" required>
					</div>
					<div class="form-group">
						<label>Пароль</label>
						<input type="password" name="password2" id="reg-pass1" class="form-control" placeholder="**********" required>
					</div>
					<div class="form-group">
						<label>Подвердить пароль</label>
						<input type="password" name="password_confirmation" id="reg-pass2" class="form-control" placeholder="**********" required>
					</div>
					 <div class="form-group">
						 <input type="checkbox" name="newsletter" id="newsletter">
						 Хочу получить новости
					 </div>
					 <input type="submit" value="Присоединяйтесь к нам" class="btn btn-login">
					<hr>
                    <input name="_token" type="hidden" id="token" value="{{ csrf_token() }}" />
						<button class="btn btn-register login">Войти</button>
					
                </form>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row main-menu">
		<ul>
			<li><a href="/">HOME</a></li>
			<li id="shop"><a href="/shop">МАГАЗИН<span class="glyphicon glyphicon-chevron-down"></span></a></li>
			<li id="brand"><a href="/about">О {{config('app.name')}}</a></li>
			<li><a href="/lookbook">LOOKBOOK</a></li>
		</ul>
		<span id="shopping-cart" class="pull-right"><a href="/cart"> Корзина <span class="count"><?php session_start(); if(isset($_SESSION['count'])) echo $_SESSION['count']; else echo 0;?></span></a> <span class="glyphicon glyphicon-shopping-cart"></span></span>
	</div>
	<div class="row sub-menu-1" id="shop">
		<div class="col-md-3">
			<h5><a title="highlights" href="/shop/highlights">Новинки</h5>
			<ul class="shop-menu">
				<li><a title="highlights" href="/shop/highlights">новое поступление</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h5><a title="men" href="/shop/men">МУЖЧИНЫ</a></h5>
			<ul class="shop-menu">
			@foreach ($category as $categoryItems)
				<li><a title="{{$categoryItems->name}}" href="/shop/men/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="col-md-3">
			<h5><a title="women" href="/shop/women">ЖЕНЩИНЫ</a></h5>
			<ul class="shop-menu">
			@foreach ($category as $categoryItems)
				<li><a title="{{$categoryItems->name}}" href="/shop/women/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="col-md-3">
			<h5><a title="kids" href="/shop/kids">ДЕТИ</a></h5>
			<ul class="shop-menu">
			@foreach ($category as $categoryItems)
				<li><a title="{{$categoryItems->name}}" href="/shop/kids/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
			@endforeach
			</ul>
		</div>
	</div>
	<!-- <div class="row sub-menu-2">
		<ul id="brand-menu">
			<li><a title="about" href="#">About</a></li>
			<li><a title="contact" href="#">Contact</a></li>
		</ul>
	</div> --!>
</nav>