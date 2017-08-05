@extends('cherrylayout.app')

@section('title', 'PRODUCT | NORD ELK')

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
			<span class="colorChoicep">Цвета: <span class="choosenColor"></span></span>
			<ul class="color">
			@include('logic.colors', ['name'=>$product->name, 'id'=>$product->id])
			</ul>
			<span class="sizeChoicep">Размер: <span class="choosenSize"></span></span>
			<ul class="sizes">
			@include('logic.size', [ 'name' => $product->name, 'color'=>$product->color])
			</ul>
			<h2>Описание</h2>
			<p class="des">
				{{$product->description}}
			</p>
			<h2>Подробнее</h2>
			<p class="det">
				{{$product->details}}
			</p>
			<div class="add-to-cart2" data-value="{{$product->id}}"><h3>Добавить в корзину<span class="glyphicon glyphicon-shopping-cart"></span></h3></div>
		</div>
	</div>
	<hr style="border-color: black">
</div>

<div class="container">
	<h2 style="text-align: center">ДРУГИЕ ТАКЖЕ КУПИЛИ</h2>
	@include('logic.relatedproducts', ['sub' => $product->subcategory_id, 'cat' => $product->category, 'id' => $product->id])
</div>
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection