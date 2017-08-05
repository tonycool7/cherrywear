<!-- Modal -->
<div id="{{$cat->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">  
  <div class="modal-content">
	<button type="button" class="close" data-dismiss="modal">X</button>
	   <div class="row product-row">
	   		<div class="col-md-7">
		   		<div id="myCarousel{{$cat->id}}" class="carousel slide" data-interval="false" data-ride="carousel">
			    <!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
				      	<div class="g">
				      	</div>
				       	<ol class="carousel-indicators">
							@if(\App\product::where('id', $cat->id)->first()->subproducts()->first() != NULL)
							<li data-target="#myCarousel{{$cat->id}}" data-slide-to="0" class="active"></li>
							@endif
							@php
								$i = 1;
							@endphp
						    @foreach(\App\product::where('id', $cat->id)->first()->subproducts()->get() as $item)
								<li data-target="#myCarousel{{$cat->id}}" data-slide-to="{{$i}}"></li>
								@php
									$i++;
								@endphp
							@endforeach
				      	</ol>
						<div class="item active" style="background-image: url({{url('/')}}/images/products/{{$cat->image}})">
						</div>
						@foreach(\App\product::where('id', $cat->id)->first()->subproducts()->get() as $item)
							<div class="item" style="background-image: url({{url('/')}}/images/products/{{$item->image}})">
							</div>
						@endforeach
				    </div>
				     <!-- Left and right controls -->
					@if(\App\product::where('id', $cat->id)->first()->subproducts()->first() != NULL)
						<a class="left carousel-control" href="#myCarousel{{$cat->id}}" role="button" data-slide="prev">
						  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel{{$cat->id}}" role="button" data-slide="next">
						  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					@endif
			  	</div>
		  </div>
	   		<!--  -->
	   		<div class="col-md-5">
	   			<span class="mp-image{{$cat->id}}" style="display: none">{{$cat->image}}</span>
	   			<h3 class="mp-name{{$cat->id}}">{{$cat->name}}</h3>
	   			<span class="secret_id"></span>
	   			<h3><span  class="mp-price{{$cat->id}}">{{$cat->new_price}}</span> ₽</h3>
	   			<h4 class="colorCompulsory">Выберите цвет: <span class=" colorChoice"></span></h4>
	   			<ul class="color c-id{{$cat->id}}">
	   				@include('logic.colors', ['name'=>$cat->name, 'id'=>$cat->id])
	   			</ul><br>
	   			<h4 class="sizeCompulsory">Выберите размер: <span class="sizeChoice"></span></span></h4>
	   			<ul class="sizes s-id{{$cat->id}}">
	   				@include('logic.size', ['name'=>$cat->name, 'color'=>$cat->color])
	   			</ul>
	   			<h3>Description</h3>
	   			<p class="des">{{$cat->description}}</p><br>
	   			<div class="add-to-cart" data-value="{{$cat->id}}" data-id="{{$cat->id}}"><h3>ADD TO CART</h3></div>
	   		</div>
	   </div>
	   </div>
	</div>
</div>