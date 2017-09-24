@extends('cherrylayout.app')

@section('title', 'PRODUCT | '.config('app.name'))

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('product')
<div class="container">
	<hr>
</div>
<div class="container {{$product->id}}">
	<div class="row product-page">
		<div class="col-md-6">
			<div id="myCarousel2" class="carousel slide" data-interval="false" data-ride="carousel">
			    <!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
				      	<div class="g">
				      	</div>
						<ol class="carousel-indicators">
							@if(\App\product::where('id', $product->id)->first()->subproducts()->first() != NULL)
								<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
							@endif
							@php
								$i = 1;
							@endphp
							@foreach(\App\product::where('id', $product->id)->first()->subproducts()->get() as $item)
								<li data-target="#myCarousel2" data-slide-to="{{$i}}"></li>
								@php
									$i++;
								@endphp
							@endforeach
						</ol>
						<div class="item active" style="background-image: url({{url('/')}}/images/products/{{$product->image}})">
						</div>
						@foreach(\App\product::where('id', $product->id)->first()->subproducts()->get() as $item)
							<div class="item" style="background-image: url({{url('/')}}/images/products/{{$item->image}})">
							</div>
						@endforeach
					</div>
				<!-- Left and right controls -->
				@if(\App\product::where('id', $product->id)->first()->subproducts()->first() != NULL)
					<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				@endif
			  	</div>
		</div>
		<div class="col-md-6">
			<span style="display: none" class="p-image">{{$product->image}}</span>
			<span class="secret_id"></span>
			<h2 class="p-name">{{$product->name}}</h2>
			<h2 class="p-price">{{$product->new_price}} ₽</h2>
			<span class="colorChoicep">Цвет: <span class="choosenColor"></span></span>
			<ul class="color">
			@include('logic.colors', ['name'=>$product->name, 'id'=>$product->id])
			</ul>
			<span class="sizeChoicep">Размер: <span class="choosenSize"></span></span>
			<ul class="sizes">
			@include('logic.size', [ 'name' => $product->name, 'color'=>$product->color])
			</ul>
			<a href="#" data-toggle="modal" data-target="#size_manual" title="" style="line-height: 3; text-decoration: underline; color: black;">руководство по размерам</a>
			<br/>
			<div class="add-to-cart2" data-value="{{$product->id}}"><h3>Добавить в корзину<span class="glyphicon glyphicon-shopping-cart"></span></h3></div>
			<br/>
			<a href="#" title="" data-toggle="modal" data-target="#product_info"  style="line-height: 3; text-decoration: underline; color: black;">Информация о товаре</a> <br/>
			{{--product info modal--}}
			<!-- Modal product info-->
			<div id="product_info" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title text-center">Информация о товаре</h4>
						</div>
						<div class="modal-body">
							<h2>Описание</h2>
							<p class="des">
								{{$product->description}}
							</p>
							<h2>Подробнее</h2>
							<p class="det">
								{{$product->details}}
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>
			<a href="#" title="" data-toggle="modal" data-target="#return_info"  style="line-height: 3; text-decoration: underline; color: black;">Доставка и возврат</a>
		</div>
	</div>
	<hr style="border-color: black">
</div>

<div class="container">
	<h3 style="text-align: center">ДРУГИЕ ТАКЖЕ КУПИЛИ</h3>
	@include('logic.relatedproducts', ['sub' => $product->subcategory_id, 'cat' => $product->category, 'id' => $product->id])
</div>

	{{--MODALS--}}
<!-- Modal size manual-->
<div id="size_manual" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">РУКОВОДСТВО ПО РАЗМЕРАМ</h4>
			</div>
			<div class="modal-body">
				<table class="table size-guide">
					<thead>
					<tr><th colspan="7" style="background-color: rgba(100, 123, 8, 0.898);">КУРТКИ, РУБАШКИ, ПИДЖАКИ, ПАЛЬТО, ФУТБОЛКИ, ТОЛСТОВКИ, РУБАШКИ-ПОЛО...</th></tr>
					<tr style="background-color: rgb(161, 191, 133)">
						<th>РАЗМЕР</th>
						<th>XS</th>
						<th>S</th>
						<th>M</th>
						<th>L</th>
						<th>XL</th>
						<th>XXL</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Обхват груди (см)</td>
						<td>87</td>
						<td>93</td>
						<td>99</td>
						<td>105</td>
						<td>111</td>
						<td>117</td>
					</tr>
					<tr>
						<td>Обхват талии (см)</td>
						<td>67</td>
						<td>73</td>
						<td>79</td>
						<td>85</td>
						<td>91</td>
						<td>97</td>
					</tr>
					<tr>
						<td>Обхват бедер (см)</td>
						<td>87</td>
						<td>93</td>
						<td>99</td>
						<td>105</td>
						<td>111</td>
						<td>117</td>
					</tr>
					</tbody>
				</table>
				{{----}}
				<table class="table size-guide">
					<thead>
					<tr><th colspan="8" style="background-color: rgba(100, 123, 8, 0.898)">БРЮКИ, ДЖИНСЫ, ШОРТЫ-БЕРМУДЫ...</th></tr>
					<tr style="background-color: rgb(161, 191, 133)">
						<th>РАЗМЕР</th>
						<th>36</th>
						<th>38</th>
						<th>40</th>
						<th>42</th>
						<th>44</th>
						<th>46</th>
						<th>48</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Высокая посадка (см)</td>
						<td>74</td>
						<td>78</td>
						<td>82</td>
						<td>86</td>
						<td>90</td>
						<td>94</td>
						<td>98</td>
					</tr>
					<tr>
						<td>Обхват бедер (см)</td>
						<td>91</td>
						<td>95</td>
						<td>99</td>
						<td>103</td>
						<td>107</td>
						<td>111</td>
						<td>115</td>
					</tr>
					</tbody>
				</table>
				{{----}}
				<table class="table size-guide">
					<thead>
					<tr><th colspan="7" style="background-color: rgba(100, 123, 8, 0.898)">БРЮКИ, ШОРТЫ...</th></tr>
					<tr style="background-color: rgb(161, 191, 133)">
						<th>РАЗМЕР</th>
						<th>XS</th>
						<th>S</th>
						<th>M</th>
						<th>L</th>
						<th>XL</th>
						<th>XXL</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Низкая посадка (см)</td>
						<td>70</td>
						<td>76</td>
						<td>82</td>
						<td>88</td>
						<td>94</td>
						<td>100</td>
					</tr>
					<tr>
						<td>Обхват бедер (см)</td>
						<td>87</td>
						<td>93</td>
						<td>99</td>
						<td>105</td>
						<td>111</td>
						<td>117</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<!-- Modal return info-->
<div id="return_info" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">Доставка и возврат</h4>
			</div>
			<div class="modal-body">
				<p>Отправка заказов «Почтой России»</p>
				<p>Для всех наших клиентов мы организуем почтовую отправку выполненных заказов по всей России.</p>
				<p>Срок доставки<br/>Сроки доставки отправлений определяются «Почтой России». В зависимости от региона, в котором находится ваш город, доставка заказа занимает от 7 дней до нескольких недель. </p>
				<p>При оформлении доставки заказа через «Почту России» учитывайте, что отправка готовых заказов осуществляется только в рабочие дни. </p>
				<p>Объединение заказов<br/>Дата отправки определяется наибольшим сроком изготовления элемента заказа.
					К примеру, если в вашем заказе толстовка, куртка и футболка, посылка будет отправлена после изготовления не раньше чем через два дня, если товара нет в наличии. </p>
				<h4>Способы оплаты </h4>
				<ol>
					<li>Наложенный платеж - оплата при получении товара в вашем почтовом отделении.
						Стоимость пересылки бандеролью весом до 2 кг – от 150 до 350 руб. (в зависимости от стоимости заказа) + комиссия по тарифам, установленным УФПС России.
						Заказы без указания ФАМИЛИИ получателя, а также без ИНДЕКСА почтового отделения отправляться не будут.
					</li>
					<li>100% предоплата<br/>
						150-350 рублей (в зависимости от стоимости заказа) – стоимость предоплаченной почтовой доставки КАЖДОГО ЗАКАЗА по любому адресу в пределах Российской Федерации. Сделайте вашим друзьям или близким, живущим далеко от вас, приятный сюрприз - закажите для них фотокнигу или фотосувенир и отправьте их почтой.
						Пример: если вы оформили три заказа за один день, значит вам нужно оплатить стоимость доставки трех заказов (3 раза по 150-350 рублей), даже если они объединены почтовой службой в одну бандероль.
						Как избежать переплаты? Оформить все необходимые товары в одном заказе.<br/>
						100% предоплата = 100% подарок!
						Выберите способ доставки «Почтой России» и оплатите заказ и доставку любым из доступных безналичных способов. Доставка будет включена в общую стоимость заказа, и вашим близким не придется платить ни копейки за свой подарок, получая его в местном почтовом отделении.
					</li>
				</ol>
				<h4>ВОЗВРАТ:</h4>
				<p>Возврат<br/>
					Любой возврат должен быть осуществлен в течение 30 дней с момента отгрузки.
					Возвраты посредством вызова курьера 300 руб.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection