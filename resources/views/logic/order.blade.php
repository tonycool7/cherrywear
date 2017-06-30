<?php
    use App\product;
    use App\orders;
    session_start();
    if(isset($_SESSION['cart'])){
        $keys = array_keys($_SESSION['cart']);
        $count = count($_SESSION['cart']);
        for($i = 1; $i<$count; $i++ ){
            $order = new orders;
            $item = product::find($keys[$i]);
            $order->product_name = $_SESSION['cart'][$keys[$i]]['name'];
            $order->product_image = $_SESSION['cart'][$keys[$i]]['image'];
            $order->product_price = $_SESSION['cart'][$keys[$i]]['price'];
            $order->product_size = $_SESSION['cart'][$keys[$i]]['size'];
            $order->product_color = $_SESSION['cart'][$keys[$i]]['color'];
            $order->quantity = $_SESSION['cart'][$keys[$i]]['quantity'];
            $item->quantity = $item->quantity - 1;
            $order->status = "in progress";
            $order->user_id = session('email');
            $order->save();
            $item->save();
        }
        unset($_SESSION['cart']);
        unset($_SESSION['total']);
        unset($_SESSION['count']);
    }
?>

<script>window.location.href = "{{url('/')}}/complete";</script>