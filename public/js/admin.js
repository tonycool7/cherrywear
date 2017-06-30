$(".coll").on("click", function(){
	$("#cir-color").css("background-color", $(this).data('value'));
	$("input[name='color']").val($(this).data('value'));
});

$(".add-qty").click(function(){
	var qty = parseInt($(".qty-number").text());
	qty++;
	$(".qty-number").text(qty);
	$("input[name='qty']").val(qty);
});

$(".reduce-qty").click(function(){
	var qty = parseInt($(".qty-number").text());
	if(qty !=1 ){
		qty--;
	}
	$(".qty-number").text(qty);
	$("input[name='qty']").val(qty);
});


$("#delete-p").click(function(){
	$("#gallery").hide("middle");
	$("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#slides").hide("middle");
	$("#delete").show("middle");
});

$("#add-p").click(function(){
	$("#gallery").hide("middle");
	$("#add").show("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#slides").hide("middle");
	$("#delete").hide("middle");
});

$("#edit-p").click(function(){
	$("#add").hide("middle");
	$("#edit").show("middle");
	$("#color").hide("middle");
	$("#gallery").hide("middle");
	$("#delete").hide("middle");
	$("#slides").hide("middle");
});

$("#edit-s").click(function(){
	$("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#gallery").hide("middle");
	$("#delete").hide("middle");
	$("#slides").show("middle");
});

$("#color-p").click(function(){
	$("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").show("middle");
	$("#delete").hide("middle");
	$("#slides").hide("middle");
	$("#gallery").hide("middle");
});

$("#gallery-p").click(function(){
	$("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#delete").hide("middle");
	$("#slides").hide("middle");
	$("#gallery").show("middle");
});