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
						    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel2" data-slide-to="1"></li>
						    <li data-target="#myCarousel2" data-slide-to="2"></li>
				      	</ol>

					    <div class="item active" style="background-image: url({{url('/')}}/images/products/{{$product->image}})">
					    </div>
					    <div class="item" style="background-image: url({{url('/')}}/images/products/{{$product->image}})">
					    </div>
					    <div class="item" style="background-image: url({{url('/')}}/images/products/{{$product->image}})">
					    </div>
				    </div>
				     <!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
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