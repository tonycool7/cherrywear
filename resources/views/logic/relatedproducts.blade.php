<div class="owl-carousel">
   	<?php
   		use Illuminate\Support\Facades\DB;

		$var = DB::table('product')->where('id', '<>', $id)->where('category', '=', $cat)->where('subcategory_id', '=', $sub)->where('quantity', '<>', '0')->groupBy('name')->groupBy('color')->get();
   		foreach ($var as $value) {
		    echo "<a href='/product/{$value->id}'><div class='item' style='background-image: url(/images/products/{$value->image}); background-size: cover; background-repeat: no-repeat'></div></a>";
    	}
    ?>
</div>