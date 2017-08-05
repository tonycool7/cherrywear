<?php
use Illuminate\Support\Facades\DB;

$var = DB::table('product')->where('name', '=', $name)->groupBy('color')->get();

foreach ($var as $value) {
	$sizes = "";
	$ids = "";
	$var2 = DB::table('product')->where('name', '=', $name)->where('color', '=', $value->color)->select('id', 'size')->groupBy('id', 'size')->get();
	foreach ($var2 as $val2){
		$sizes .= $val2->size.",";
		$ids .= $val2->id.",";
	}
	echo "<li data-value='$value->color' data-ids='$ids' data-size='$sizes' data-id='$value->id' data-value3='$id' data-desc='$value->description' data-details='$value->details' data-price='$value->new_price' data-value2='$value->image' style='background-color: $value->color'></li>";
}

?>