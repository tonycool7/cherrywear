@extends('cherrylayout.app')

@section('title', 'SHOP | '.config('app.name'))

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('shop')
<div class="container s-container">
	<div class="row tracking">
		<p>Home > <a href="/shop"> Магазин </a> > @if ($category_name) <a href="/shop/{{$category_name}}"> {{$category_name}} </a>@endif 
		@if ($sub_category_name) > <a href="/shop/{{$category_name}}/{{$sub_category_name}}"> {{$sub_category_name}} </a>@endif</p>
	</div>
	<div class="row filter-container">
		<div class="col-md-6">
			<h3>Категория: {{$sub_category_name}} <span class="subcategory-filter-icon glyphicon glyphicon-chevron-down"></span></h3>
			<ul class="subcat-filter">
				@if($mainCategory != "")
					@foreach($mainCategory as $key => $value)
						<li><a title="{{$key}}" href="/shop/{{$value}}">{{$key}}</a></li>
					@endforeach
				@else
					@foreach ($category as $categoryItems)
						<li><a title="{{$categoryItems->rusname}}" href="/shop/{{$category_name}}/{{$categoryItems->name}}">{{$categoryItems->rusname}}</a></li>
					@endforeach
				@endif
				
			</ul>
		</div>
		<div class="col-md-6">
			<h3>ФИЛЬТР: Цвет <span class="color-filter-icon glyphicon glyphicon-chevron-down"></span></h3>
			<ul class="color-filter">
				@if($color != "")
					@if($category_name)
						@php $catname = $category_name."/"
						@endphp
					@else
						@php $catname = ""
						@endphp
					@endif
					@foreach($color as $value)

						<li><a title="{{$value->color}}" href="/shop/{{$catname}}@if($sub_category_name){{$sub_category_name}}/@endif{{$value->color}}" style="background-color: {{$value->color}}"></a></li>
					@endforeach
				@endif
			</ul>
		</div>
	</div>

	<div class="shop-container">
		<ul class="row shop-box">
			@if ($product != "")
			@foreach ($product as $cat)
			<li class="product-box">
				<a href="/product/{{$cat->id}}">
					<div class="product-image" style="background-image: url('/images/products/{{$cat->image}}')">
					</div>
					<div class="item-shadow"><div></div></div>
				</a>
				<p data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}">КУПИТЬ СЕЙЧАС</p>
				{{--<div class="view-product"><div class="glyphicon glyphicon-eye-open" ><span>View</span></div></div>--}}
				<div class="product-name">
					<h3>{{$cat->name}}</h3>
				</div>
				<div class="product-price">
					<span>{{$cat->new_price}} ₽</span>
				</div>
			</li>
			@include('cherrylayout.modal')
			@endforeach
			@endif
			@if ($categorizedProducts != "")
			@foreach ($categorizedProducts as $cat)
			<li class="product-box">
				<a href="/product/{{$cat->id}}">
					<div class="product-image" style="background-image: url('/images/products/{{$cat->image}}')">
					</div>
					<div class="item-shadow"><div></div></div>
				</a>
				<p data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}">КУПИТЬ СЕЙЧАС</p>
				{{--<div class="view-product"><div class="glyphicon glyphicon-eye-open" ><span>View</span></div></div>--}}
				<div class="product-name">
					<h3>{{$cat->name}}</h3>
				</div>
				<div class="product-price">
					<span>{{$cat->new_price}} ₽</span>
				</div>
			</li>
			@include('cherrylayout.modal')
			@endforeach
			@endif
			@if ($subCategorizedProducts != "")
			@foreach ($subCategorizedProducts as $cat)
			<li class="product-box">
				<a href="/product/{{$cat->id}}">
					<div class="product-image" style="background-image: url('/images/products/{{$cat->image}}')">
					</div>
					<div class="item-shadow"><div></div></div>
				</a>
				<p data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}">КУПИТЬ СЕЙЧАС</p>
				{{--<div class="view-product"><div class="glyphicon glyphicon-eye-open" ><span>View</span></div></div>--}}
				<div class="product-name">
					<h3>{{$cat->name}}</h3>
				</div>
				<div class="product-price">
					<span>{{$cat->new_price}} ₽</span>
				</div>
			</li>
			@include('cherrylayout.modal')
			@endforeach
			@endif

			@if ($productbyColor != "")
			@foreach ($productbyColor as $cat)
			<li class="product-box">
				<a href="/product/{{$cat->id}}">
					<div class="product-image" style="background-image: url('/images/products/{{$cat->image}}')">
					</div>
					<div class="item-shadow"><div></div></div>
				</a>
				<p data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}">КУПИТЬ СЕЙЧАС</p>
				{{--<div class="view-product"><div class="glyphicon glyphicon-eye-open" ><span>View</span></div></div>--}}
				<div class="product-name">
					<h3>{{$cat->name}}</h3>
				</div>
				<div class="product-price">
					<span>{{$cat->new_price}} ₽</span>
				</div>
			</li>
			@include('cherrylayout.modal')
			@endforeach
			@endif
		</ul>
	</div>

</div>
@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection