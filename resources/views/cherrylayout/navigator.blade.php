<nav class="container-fluid">
<div class="container-fluid">
	<div class="row header">
		<h1 class="text-center"><a title="NORD ELK" id="banner" href="{{url('/')}}"><div>NORD&ensp;ELK</div><div><img src="{{url('/')}}/images/logo.png"></div></a></h1><br>
		<div id="search-account">
			<div class="refresh">@if (session('login') != 'true')<span class="login">Войти</span> / <span class="register">зарегистрироваться</span>&nbsp;<span class="glyphicon glyphicon-user"></span>@else <span class="account"><a href="{{url('/')}}/account">welcome {{session('user')}} </a></span><span class="logout">Выйти</span> @endif</div>
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
                    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
					<button class="btn btn-register join">Присоединяйтесь к нам</button>
				</form>
			</div>
			<div class="register-container">
				 <form class="form-horizontal" role="form" method="POST" action="{{url('/')}}/reg">
                        <div class="form-group">
							<label>Имя: </label>
							<input type="text" name="name2" class="form-control" placeholder="Имя" required>
		
						</div>
						<div class="form-group">
							<label>Эл. адрес</label>
							<input type="email" name="email2" class="form-control" placeholder="Эл. адрес" required>
				
						</div>
						<div class="form-group">
							<label>Телефон</label>
							<input type="phone" name="tel" class="form-control" placeholder="+79533456787" required>
				
						</div>

						<div class="form-group">
							<label>Пароль</label>
							<input type="password" name="password2" class="form-control" placeholder="**********" required>
				
						</div>

						<div class="form-group">
							<label>Подвердить пароль</label>
							<input type="password" name="password_confirmation" class="form-control" placeholder="**********" required>

						</div>
                        <input type="submit" value="Присоединяйтесь к нам" class="btn btn-login">
						<hr>
                    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
						<button class="btn btn-register login">Войти</button>
					
                </form>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row main-menu">
		<ul>
			<li><a href="{{url('/')}}">HOME</a></li>
			<li id="shop"><a href="{{url('/')}}/shop">МАГАЗИН<span class="glyphicon glyphicon-chevron-down"></span></a></li>
			<li id="brand"><a href="#">О NORDELK</a></li>
			<li><a href="#">LOOKBOOK</a></li>
		</ul>
		<span id="shopping-cart" class="pull-right"><a href="{{url('/')}}/cart"> Корзина <span class="count"><?php session_start(); if(isset($_SESSION['count'])) echo $_SESSION['count']; else echo 0;?></span></a> <span class="glyphicon glyphicon-shopping-cart"></span></span>
	</div>
	<div class="row sub-menu-1" id="shop">
		<div class="col-md-3">
			<h5><a title="highlights" href="{{url('/')}}/shop/highlights">Новинки</h5>
			<ul class="shop-menu">
				<li><a title="highlights" href="{{url('/')}}/shop/highlights">новое поступление</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h5><a title="men" href="{{url('/')}}/shop/men">МУЖЧИНЫ</a></h5>
			<ul class="shop-menu">
			@foreach ($category as $categoryItems)
				<li><a title="{{$categoryItems->name}}" href="{{url('/')}}/shop/men/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="col-md-3">
			<h5><a title="women" href="{{url('/')}}/shop/women">ЖЕНЩИНЫ</a></h5>
			<ul class="shop-menu">
			@foreach ($category as $categoryItems)
				<li><a title="{{$categoryItems->name}}" href="{{url('/')}}/shop/women/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="col-md-3">
			<h5><a title="kids" href="{{url('/')}}/shop/kids">ДЕТИ</a></h5>
			<ul class="shop-menu">
			@foreach ($category as $categoryItems)
				<li><a title="{{$categoryItems->name}}" href="{{url('/')}}/shop/kids/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
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