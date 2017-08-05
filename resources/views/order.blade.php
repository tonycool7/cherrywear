@extends ('cherrylayout.app')

@section('title', 'ЗАКАЗЫ | CHERRYWEAR')

@section ('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('account')
	@include('cherrylayout.accountNavLayout')
	@if(isset($orders))
			<div class="container">
				<div class="row">
					<div class="order">
						<table class="my-table table-bordered">
							<thead>
								<tr>
									<th>Order_id</th>
									<th>Name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Color</th>
									<th>Size</th>
									<th>Status</th>
									<th>Purchase date</th>
								</tr>
							</thead>
							<tbody>
								@foreach($orders as $items)
								<tr>
									<td>{{$items->id}}</td>
									<td>{{$items->product_name}}</td>
									<td>{{$items->product_price}}</td>
									<td>{{$items->quantity}}</td>
									<td>{{$items->product_color}}</td>
									<td>{{$items->product_size}}</td>
									<td>{{$items->status}}</td>
									<td>{{$items->created_at}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
	@endif

@endsection

@section('footer')
	@include('cherrylayout.footer2')
@endsection