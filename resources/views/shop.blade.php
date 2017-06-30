@extends('cherrylayout.app')

@section('title', 'SHOP | NORD ELK')

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('shop')
<div class="container s-container">
	<div class="row tracking">
		<p>Home > <a href="{{url('/')}}/shop"> Магазин </a> > @if ($category_name) <a href="{{url('/')}}/shop/{{$category_name}}"> {{$category_name}} </a>@endif 
		@if ($sub_category_name) > <a href="{{url('/')}}/shop/{{$category_name}}/{{$sub_category_name}}"> {{$sub_category_name}} </a>@endif</p>
	</div>
	<div class="row filter-container">
		<div class="col-md-6">
			<h3>Категория: {{$sub_category_name}} <span class="subcategory-filter-icon glyphicon glyphicon-chevron-down"></span></h3>
			<ul class="subcat-filter">
				@if($mainCategory != "")
					@foreach($mainCategory as $value)
						<li><a title="{{$value}}" href="{{url('/')}}/shop/{{$value}}">{{$value}}</a></li>
					@endforeach
				@else
					@foreach ($category as $categoryItems)
						<li><a title="{{$categoryItems->name}}" href="{{url('/')}}/shop/{{$category_name}}/{{$categoryItems->name}}">{{$categoryItems->name}}</a></li>
					@endforeach
				@endif
				
			</ul>
		</div>
		<div class="col-md-6">
			<h3>ФИЛЬТР: Цвета <span class="color-filter-icon glyphicon glyphicon-chevron-down"></span></h3>
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

						<li><a title="{{$value->color}}" href="{{url('/')}}/shop/{{$catname}}@if($sub_category_name){{$sub_category_name}}/@endif{{$value->color}}" style="background-color: {{$value->color}}"></a></li>
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
				<a href="{{url('/')}}/product/{{$cat->id}}"><div class="product-image" style="background-image: url({{url('/')}}/images/products/{{$cat->image}})">
					
				</div></a>
				<div class="view-product"><div class="glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}"><span>View</span></div></div>
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
				<a href="{{url('/')}}/product/{{$cat->id}}"><div class="product-image" style="background-image: url('{{url('/')}}/images/products/{{$cat->image}}')">
					
				</div></a>
				<div class="view-product"><div class="glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}"><span>View</span></div></div>
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
				<a href="{{url('/')}}/product/{{$cat->id}}"><div class="product-image" style="background-image: url('{{url('/')}}/images/products/{{$cat->image}}')">
					
				</div></a>
				<div class="view-product"><div class="glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}"><span>View</span></div></div>
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
				<a href="{{url('/')}}/product/{{$cat->id}}"><div class="product-image" style="background-image: url('{{url('/')}}/images/products/{{$cat->image}}')">
					
				</div></a>
				<div class="view-product"><div class="glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#{{$cat->id}}" data-value="{{$cat->id}}"><span>View</span></div></div>
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