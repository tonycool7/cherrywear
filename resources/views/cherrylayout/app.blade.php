<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="ru">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/less" href="/css/cherrywear.less">
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.green.min.css">
	<link rel="icon" type="image/png" href="/images/logo2.png">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter42680559 = new Ya.Metrika({
	                    id:42680559,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true,
	                    trackHash:true
	                });
	            } catch(e) { }
	        });
	
	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";
	
	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/42680559" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46129833 = new Ya.Metrika({
                        id:46129833,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/46129833" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
	<div class="addedtocart">
		<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<h5 class="bold">CART</h5>
		</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img src="" class="added-img">
			</div>
			<div class="col-md-6">
				<h4 class="bold added-name"></h4>
				<h5 class="bold added-price"></h5>
				<h5 class="added-color"></h5>
				<h5 class="added-size"></h5>
				<h5 class="bold text-success">Added to cart</h5>
			</div>
		</div>
	</div>
	<div class="deletedfromcart">
		<h3 class="text-danger">Product removed from cart</h3>
	</div>

	<div class="loggedin">
		<h3 class="text-success">You have successfully logged in</h3>
	</div>

	<div class="regsuccess" style="font-size: 12px;">
		<h3 class="text-success">You have successfully registered to wrapped, please login</h3>
	</div>

	<div class="notloggedin">
		<h3 class="text-danger">username or password incorrect</h3>
	</div>

	<div class="notregsiterd">
		<h3 class="text-danger">password mismatch</h3>
	</div>

	@section('navigation')
	@show

	@section('slides')
	@show

	@section('checkout')
	@show

	@section('shop')
	@show

	@section('lookbook')
	@show

	@section('about')
	@show

	@section('error')
	@show

	@section('product')
	@show

	@section('account')
	@show

	@section('carousel')
	@show
	
	@section('knowmore')
	@show
	
	@section('parallax')
	@show

	@section('cart')
	@show

	@section('footer')
	@show