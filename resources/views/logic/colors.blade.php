<?php
use Illuminate\Support\Facades\DB;

$var = DB::table('product')->where('name', '=', $name)->groupBy('color')->get();

foreach ($var as $value) {
	$sizes = "";
	$ids = "";
    $images = $value->image;
	$var2 = DB::table('product')->where('name', '=', $name)->where('color', '=', $value->color)->select('id', 'size')->groupBy('id', 'size')->get();
    $var3 = \App\product::where('id', $id)->first()->subproducts()->get();
    foreach ($var3 as $val3){
        $images .= ",".$val3->image;
    }
//    if($id == 70) { dd($images);}

    foreach ($var2 as $val2){
		$sizes .= $val2->size.",";
		$ids .= $val2->id.",";
	}
	echo "<li data-value='$value->color' data-ids='$ids' data-size='$sizes' data-id='$value->id' data-value3='$id' data-desc='$value->description' data-details='$value->details' data-price='$value->new_price' data-value2='$images' style='background-color: $value->color'></li>";
}

?>