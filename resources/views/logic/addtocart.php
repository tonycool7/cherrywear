<?php
	use App\product;
	session_start();

	if(!isset($_SESSION['total'])){
		$_SESSION['total'] = 0;
		$_SESSION['count'] = 0;
		$_SESSION['cart'][0] = 0;
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(in_array($id, array_keys($_SESSION['cart']))){
			$_SESSION['cart'][$id]['quantity']++;
			// $_SESSION['total'] = $_SESSION['total'] - $_SESSION['total_price'];
			$_SESSION['count']++;
		}else{
			$_SESSION['cart'][$id]['quantity'] = 1;	
			$_SESSION['count']++;
			$color = $_GET['color'];
			$size = $_GET['size'];
			$product_row = product::where('id', $id)->get()->first();
			$_SESSION['cart'][$id]['name'] = $product_row->name;
			$_SESSION['cart'][$id]['image'] = $product_row->image;
			$_SESSION['cart'][$id]['price'] = $product_row->new_price;
			$_SESSION['cart'][$id]['size'] = $size;
			$_SESSION['cart'][$id]['color'] = $color;
		}
		$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['price'];
	}


?>