{{--{{dd($order)}}--}}
@php
    $first = $order->first();
    $user = \App\customer::find($first->user_id);
@endphp
    <img src="images/logo2.png">
    <h2>Заказ на WRAPPED</h2>
    <div>
        <h3>Name: {{$user->name}}</h3>
        <h3>Email: {{$user->email}}</h3>
        <h3>Region: {{$user->region}}</h3>
        <h3>Address: {{$user->address}}</h3>
    </div>
    <table border="1" class="table table-bordered">
        <thead>
        <tr>
            <th>product name</th>
            <th>product price</th>
            <th>product size</th>
            <th>product QTY</th>
            <th>product color</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order as $or => $item)
            <tr>
                <th>{{$item->product_name}}</th>
                <th>{{$item->product_price}}</th>
                <th>{{$item->product_size}}</th>
                <th>{{$item->quantity}}</th>
                <th>{{$item->product_color}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

