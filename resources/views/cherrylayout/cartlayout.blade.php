<div class="container">
	<h2 style="text-align: center" class="bold">КОРЗИНА</h2>
</div>
<div class="container">
	<hr>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php
				// session_start();
				if(isset($_SESSION['cart'])){
					$keys = array_keys($_SESSION['cart']);
					$count = count($_SESSION['cart']);
					for($i = 1; $i<$count; $i++ ){
						// echo $_SESSION['cart'][$keys[$i]]['name'];
						echo '<div class="cart-product">
								<span class="delete" data-value="'.$keys[$i].'">удалить</span>
								<div class="row">
								<div class="my-md-4">
								<img src= "images/products/'.$_SESSION['cart'][$keys[$i]]['image'].'">
								</div>
								<div class="my-md-8">
									<h2>'.$_SESSION['cart'][$keys[$i]]['name'].'</h2>
									<h2>'.$_SESSION['cart'][$keys[$i]]['price'].' ₽</h2>
									<div class="row">
										<div class="col-md-3">
											<h5>Количество: </h5>
											<h5>Цвет:</h5>
											<h5>Размер:</h5>
										</div>
										<div class="col-md-9" style="padding-top: 4px;">
											<input type="text" class="qty'.$keys[$i].'" value="'.$_SESSION['cart'][$keys[$i]]['quantity'].'">
											
											<h5>'.$_SESSION['cart'][$keys[$i]]['color'].'</h5>
											<h5>'.$_SESSION['cart'][$keys[$i]]['size'].'</h5>
										</div>
									</div>
									<div class="bold" style="margin-top: 35px;">TOTAL: <span class="bold price'.$keys[$i].'">'.$_SESSION['cart'][$keys[$i]]['price'] * $_SESSION['cart'][$keys[$i]]['quantity'].'</span> ₽</div>
								</div>
								</div>
							</div>';
					}
				}
				if(!isset($_SESSION['total']) || $_SESSION['total'] == 0 ){
					echo '<div class="cart-product">КОРЗИНА ПУСТА</div>';
				}
			?>
			<div class="cart-empty">КОРЗИНА ПУСТА</div>
			<a class="btn btn-default go-to-shop" href="{{url('/')}}/shop">ВЕРНУТЬСЯ В МАГАЗИН</a><br>
		</div>
		<div class="col-md-4">
			<div class="cart-conclusion">
				<h5 class="bold">ОБЩАЯ СТОИМОСТЬ ТОВАРОВ В КОРЗИНЕ</h5>
				<div class="cart-conclusion-content">
					<h6>СТОИМОСТЬ ЗАКАЗА: <span class="pull-right"><span class="amt"><?php if(isset($_SESSION['total'])) echo $_SESSION['total']; else echo 0;?></span> ₽</span></h6>
					<h6>ДОСТАВКА: <span class="pull-right">300 ₽</span></h6>
					<hr style="border:1px solid black ! important">
					<h6>ИТОГО: <span class="pull-right"><span class="total-amt"><?php if(isset($_SESSION['total'])) echo $_SESSION['total'] + 300;?></span> ₽</span></h6>
					<div><a href="{{url('/')}}/checkout" class="checkout bold">CHECKOUT</a></div>
					<div>
						<p>Цены и стоимость доставки являются неподтвержденными до перехода к разделу оформления заказа.</p>
						<p>14-дневный период возврата товара, комиссия за возврат и возврат стоимости за неотправленный товар. Прочитать о  Прочитать о возврате и возмещении стоимости товара.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
