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
    $("#lookbook").hide("middle");
    $("#subscribers").hide("middle");

});

$("#subscribe-p").click(function(){
    $("#gallery").hide("middle");
    $("#add").hide("middle");
    $("#edit").hide("middle");
    $("#color").hide("middle");
    $("#slides").hide("middle");
    $("#delete").hide("middle");
    $("#lookbook").hide("middle");
    $("#subscribers").show("middle");
});


$("#lookbook-p").click(function(){
    $("#gallery").hide("middle");
    $("#add").hide("middle");
    $("#edit").hide("middle");
    $("#color").hide("middle");
    $("#slides").hide("middle");
    $("#delete").hide("middle");
    $("#lookbook").show("middle");
    $("#subscribers").hide("middle");

});

$("#add-p").click(function(){
	$("#gallery").hide("middle");
	$("#add").show("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#slides").hide("middle");
	$("#delete").hide("middle");
    $("#lookbook").hide("middle");
    $("#subscribers").hide("middle");

});

$("#edit-p").click(function(){
    $("#lookbook").hide("middle");
    $("#add").hide("middle");
	$("#edit").show("middle");
	$("#color").hide("middle");
	$("#gallery").hide("middle");
	$("#delete").hide("middle");
	$("#slides").hide("middle");
    $("#subscribers").hide("middle");

});

$("#edit-s").click(function(){
    $("#lookbook").hide("middle");
    $("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#gallery").hide("middle");
	$("#delete").hide("middle");
	$("#slides").show("middle");
    $("#subscribers").hide("middle");

});

$("#color-p").click(function(){
    $("#lookbook").hide("middle");
    $("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").show("middle");
	$("#delete").hide("middle");
	$("#slides").hide("middle");
	$("#gallery").hide("middle");
    $("#subscribers").hide("middle");

});

$("#gallery-p").click(function(){
    $("#lookbook").hide("middle");
    $("#add").hide("middle");
	$("#edit").hide("middle");
	$("#color").hide("middle");
	$("#delete").hide("middle");
	$("#slides").hide("middle");
	$("#gallery").show("middle");
    $("#subscribers").hide("middle");

});