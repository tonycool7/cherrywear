<?php
	session_start();
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		$_SESSION['total'] = $_SESSION['total'] - ($_SESSION['cart'][$id]['price'] * $_SESSION['cart'][$id]['quantity']);
		$_SESSION['count'] = $_SESSION['count'] - $_SESSION['cart'][$id]['quantity'];
		unset($_SESSION['cart'][$id]);
	}else{
		echo "not deleted";
	}
?>