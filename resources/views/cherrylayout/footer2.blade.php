	<div class="container"><div class="row"><hr></hr></div></div>
	<div id="parallax-footer"></div>
	<footer class="newfooter container-fluid">
		<div class="row">
			<div class="col-3">
				<h3>ВАМ НУЖНА ПОМОЩЬ?</h3>
				<ul>
					<li><a href="#">УХОД ЗА ОДЕЖДОЙ</a></li>
					<li><a href="#">РУКОВОДСТВО ПО РАЗМЕРАМ</a></li>
					<li><a href="#">ДОСТАВКА И ВОЗРАТ</a></li>
					{{--<li><a href="#">MATERIALS</a></li>--}}
				</ul>
			</div>
			<div class="col-3">
				<h3>ИНФОРМАЦИЯ О КОМПАНИИ</h3>
				<ul>
					<li><a href="/about">О {{config('app.name')}}</a></li>
					<li><a href="#">КОНТАКТЫ</a></li>
					<li><a href="#">ВАШИ ОТЗЫВЫ</a></li>
					{{--<li><a href="#">CONTACTS</a></li>--}}
				</ul>
			</div>
			<div class="col-3">
				<h3>ПРИСОЕДИНЯЙТЕСЬ К НАМ</h3>
				<a target="_blank" href="https://m.facebook.com/WRAPPEDGEAR/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a target="_blank" href="https://vk.com/wrapped17"><i class="fa fa-vk" aria-hidden="true"></i></a>
				<a target="_blank" href="https://www.instagram.com/wrapped_gear/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div class="col-3">
				<h3>НЕ ПРОПУСТИТЕ</h3>
				<div class="form-group">
					<div class="col-md-12" style="padding: 0px">
						<div class="subscription_success" style="color: white"></div>
						<input type="email" id="subscribe" class="form-control" placeholder="ЭЛ. ПОЧТА">
					</div>
					<br><br><button class="btn btn-default" id="subscr">ПОДПИСАТЬСЯ</button>
				</div>
				
			</div>
		</div>
		<div class="row footer-info">
			<div class="col-md-12">
				<ul class="footer-list">
					<li style="padding-top: 13px">&copy;<?php echo date('Y')?></li>
					<li style="padding-top: 13px"><a href="#">TERMS & CONDITIONS</a></li>
					<li style="padding-top: 13px"><a href="#">IMPRESS</a></li>
					<li style="padding-top: 13px"><a href="#">PRIVACY POLICY</a></li>
					<li class="right"><a href="#">TYPE OF PAYMENT</a><span class="payment"><img src="/images/payment/mastercard.png"></span><span class="payment"><img src="/images/payment/visa.png"></span><span class="payment"><img src="/images/payment/cash.png"></span></li>
				</ul>
				
			</div>
		</div>
	</footer>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/cherrywear.js"></script>

</body>
</html>