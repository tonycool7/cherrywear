<?php
use Illuminate\Support\Facades\DB;

$var = DB::table('product')->where('name', '=', $name)->where('color', '=', $color)->select('id', 'size')->groupBy('id', 'size')->get();


foreach ($var as $value) {
	echo "<li data-value='$value->size' data-id='$value->id'><h4>".strtoupper($value->size)."</h4></li>";
}

?>