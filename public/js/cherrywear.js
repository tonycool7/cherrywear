
$(function() {
    $(".sub-menu-1").hide();
    var timeoutId;
    $("#shop").hover(function() {
        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {
                timeoutId = null;
                $(".sub-menu-1").slideDown("fast");
                $(".sub-menu-2").slideUp('fast'); 
           }, 300);
        }
    },
    function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
        else {
        		// $(".sub-menu-1").stop(true, true).slideUp('slow');       
        }
    });
});

	
$(function() {
    $(".sub-menu-2").hide();
    var timeoutId;
    $("#brand").hover(function() {
        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {
                timeoutId = null;
                $(".sub-menu-2").slideDown("fast");
                $(".sub-menu-1").slideUp('fast'); 
           }, 300);
        }
    },
    function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
        else {
        		// $(".sub-menu-1").slideUp('slow');       
        }
    });
});

$(".subcategory-filter-icon").click(function(){
	if(!$(".subcat-filter").is(":visible")){
		$(".subcat-filter").slideDown("fast");
	}else{
		$(".subcat-filter").slideUp("fast");
	}
});

$(".color-filter-icon").click(function(){
    if(!$(".color-filter").is(":visible")){
        $(".color-filter").slideDown("fast");
    }else{
        $(".color-filter").slideUp("fast");
    }
});

$(".login, .log").click(function(e){
    e.preventDefault();
    if(!$(".login-container").is(":visible")){
        $(".login-container").slideDown("fast");
        $(".register-container").slideUp("fast");
    }else{
        $(".login-container").slideUp("fast");
    }
});



$(".register, .join").click(function(e){
    e.preventDefault();
    if(!$(".register-container").is(":visible")){
        $(".register-container").slideDown("fast");
        $(".login-container").slideUp("fast");
    }else{
        $(".register-container").slideUp("fast");
    }
});


$(".sub-menu-1").mouseleave(function(){
	$(".sub-menu-1").slideUp('slow'); 
});

$(".sub-menu-2").mouseleave(function(){
	$(".sub-menu-2").slideUp('slow'); 
});

$(".subcat-filter").mouseleave(function(){
    $(".subcat-filter").slideUp('slow'); 
});

$(".color-filter").mouseleave(function(){
    $(".color-filter").slideUp('slow'); 
});

$(".add-to-cart").on('click', function(){
    var id = $(this).data('value');
    var pic_id = $(this).data('id');
    var v_id = $(".s-id"+id+" li.activeSize").data('id');
    var name = $(".mp-name"+id).text();
    var price = $(".mp-price"+id).text();
    var color = $(".c-id"+id+" li.activeColor").data('value');
    var size = $(".s-id"+id+" li.activeSize").data('value');
    var image = $(".mp-image"+pic_id).text();
    var count = parseInt($(".count").text());
    if(isNaN(count)){
        count = 0;
    }
    if(!$(".c-id"+id).children("li").hasClass("activeColor")){
        $("#"+id+" .colorCompulsory").css("color", "red");
    }else if(!$(".s-id"+id).children("li").hasClass("activeSize")){
        $("#"+id+" .sizeCompulsory").css("color", "red");
    }else{
        $.ajax({
            type: 'get',
            url: '/addtocart',
            data: {'id':v_id,'color':$(".color li.activeColor").data('value').replace(/\s+/, ""),'size':$(".sizes li.activeSize").data('value')},
            success:
            function(){
                $('.addedtocart').hide().slideDown().delay(1200).slideUp();
                $(".modal").modal('hide');
                count++;
                $(".count").text(count);
            }
        });
        $(".added-name").html(name);
        $(".added-price").html(price+"₽");
        $(".added-color").html("color: "+color);
        $(".added-size").html("size: "+size);
        $(".added-img").attr('src', '/images/products/'+image);
    }
   
});

$(".add-to-cart2").click(function(){
    var id = $(this).data('value');
    var name = $(".p-name").text();
    var price = $(".p-price").text();
    var color = $(".color li.activeColor").data('value');
    var size = $(".sizes li.activeSize").data('value');
    var image = $(".p-img").text();
    var count = parseInt($(".count").text());
    if(isNaN(count)){
        count = 0;
    }
    if(!$(".color").children("li").hasClass("activeColor")){
        $("."+id+" .colorChoicep").css("color", "red");
    }else if(!$(".sizes").children("li").hasClass("activeSize")){
        $("."+id+" .sizeChoicep").css("color", "red");
    }else{
        $.ajax({
            type: 'get',
            url: '/addtocart',
            data: {'id':$(".sizes li.activeSize").data('id'), 'color':color.replace(/\s+/, ""), 'size':size},
            success: function(){
                $('.addedtocart').hide().slideDown().delay(1200).slideUp();
                count++;
                $(".count").text(count);
            },
            error: function () {
                alert('error');
            }
        });
        $(".added-name").html(name);
        $(".added-price").html(price);
        $(".added-color").html("color: "+color);
        $(".added-size").html("size: "+size);
        $(".added-img").attr('src', '/images/products/'+image);
    }
});

$(".delete").click(function(){
    var id = $(this).data('value');
    var qty = $(this).data('qty');
    var count = parseInt($(".count").text());
    $.ajax({
        type: 'get',
        url: '/deletefromcart',
        data: ({del: id}),
        success:
        function(){
             $('.deletedfromcart').hide().slideDown().delay(200).slideUp();
             if(count != 0){
                 count = count - qty;
             }
             $(".count").text(count);
        }
    });
    if((count-1) == 0){
        $(".cart-empty").show("middle");
        $(".go-to-shop").show("middle");
    }
    $(".amt").html(parseInt($(".amt").html()) - parseInt($(".price"+id).html()));
    $(".total-amt").html(parseInt($(".total-amt").html()) - parseInt($(".price"+id).html()));
    $(this).closest("div").hide();
});

$(".color li").click(function(){
    var id = $(this).data('value3');
    $(".color li").removeClass('activeColor');
    $(this).addClass('activeColor');
    $("#"+id+" .colorCompulsory").css("color", "black");
    $("."+id+" .colorChoicep").css("color", "black");
    $(".secret_id").html(id);
    $("#"+id+" .colorChoice").css("background-color", $(this).data('value'));
    $("."+id+" .choosenColor").css("background-color", $(this).data('value'));
});

$(".sizes").on("click", "li", function(){
    var id = $('.secret_id').html();
    $(".sizes li").removeClass('activeSize');
    $(this).addClass('activeSize');
    $("#"+id+" .sizeCompulsory").css("color", "black");
    $("."+id+" .sizeChoicep").css("color", "black");
    $("#"+id+" .sizeChoice").html(" "+$(this).data('value'));
    $("."+id+" .choosenSize").html(" "+$(this).data('value'));
});

$('.owl-carousel').owlCarousel({
    //loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:3
        },
        1600:{
            items:5
        }
    }
});


$(".check-reg").click(function(){
    $(".checklogin").hide('middle');
    $(".checkreg").show('middle');
});


$(".check-log").click(function(){
    $(".checkreg").hide('middle');
    $(".checklogin").show('middle');
});

$(".logout").click(function(){
    $.ajax({
        url: "/logout",
        success: function(){
            window.location.reload();
        }
    });
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

$("#subscr").click(function(){
    if(!isEmail($("#subscribe").val())){
        $("#subscribe").css("border", "1px solid red");
    }else{
        $("#subscribe").css("border", "none");
        $.ajax({
            data: ({submail: $("#subscribe").val()}),
            url: "/subscribe",
            success: function(){
                $("#subscribe").hide();
                $(".subscription_success").text("Subscription Successful");
            }
        });
    }
});

$("#login-form").submit(function(e){
    e.preventDefault();
    var email = $(".l-email").val();
    var password = $(".l-password").val();
    var token = $('#token_log').val();

    $.ajax({
        type: 'post',
        url: "/log",
        data: {'mail': email, 'pword': password,'_method': 'post', '_token' : token},
        success: function(data){
            if(data == "true"){
                window.location.reload();
            }else{
                 $('.notloggedin').hide().slideDown().delay(200).slideUp();
            }
        }
    });
});

$("#reg-form").submit(function(e){
    e.preventDefault();
    var name = $("#reg-name").val();
    var surname = $("#reg-sur").val();
    var address = $("#reg-addr").val();
    var city = $("#reg-city").val();
    var index = $("#reg-index").val();
    var region = $("#reg-region").val();
    var country = $("#reg-country").val();
    var tel = $("#reg-tel").val();
    var email = $("#reg-email").val();
    var pass1 = $("#reg-pass1").val();
    var pass2 = $("#reg-pass2").val();
    var token = $('#token').val();
    var news = "";
    if($("#newsletter").is(':checked')){
        news = true;
    }else{
        news =false;
    }

    $.ajax({
        type: 'post',
        url: "/reg",
        data: {'name' : name, 'surname' : surname, 'address' : address, 'city': city, 'postal_code': index, 'region': region,
        'country': country, '_token' : token, 'telephone' : tel, 'email': email, 'password1': pass1, 'password2': pass2, 'news': news, '_method' : 'post'},
        success: function(data){
            if(data == "true"){
                $('.regsuccess').hide().slideDown().delay(200).slideUp();
                window.location.reload();
            }else{
                $('.notregsiterd').hide().slideDown().delay(200).slideUp();
            }
        }
    });
});


$("#reg-form2").submit(function(e){
    e.preventDefault();
    var name = $("#reg-name2").val();
    var surname = $("#reg-sur2").val();
    var address = $("#reg-addr2").val();
    var city = $("#reg-city2").val();
    var index = $("#reg-index2").val();
    var region = $("#reg-region2").val();
    var country = $("#reg-country2").val();
    var tel = $("#reg-tel2").val();
    var email = $("#reg-email2").val();
    var pass1 = $("#reg-pass12").val();
    var pass2 = $("#reg-pass22").val();
    var token = $('#token').val();
    var news = "";
    if($("#news").is(':checked')){
        news = true;
    }else{
        news =false;
    }

    $.ajax({
        type: 'post',
        url: "/reg",
        data: {'name' : name, 'surname' : surname, 'address' : address, 'city': city, 'postal_code': index, 'region': region,
            'country': country, '_token' : token, 'telephone' : tel, 'email': email, 'password1': pass1, 'password2': pass2, 'news': news, '_method' : 'post'},
        success: function(data){
            if(data == "true"){
                $('.regsuccess').hide().slideDown().delay(200).slideUp();
                window.location.reload();
            }else{
                $('.notregsiterd').hide().slideDown().delay(200).slideUp();
            }
        }
    });
});

$("#login-form2").submit(function(e){
    e.preventDefault();
    var email = $(".l2-email").val();
    var password = $(".l2-password").val();
    var token = $('#token').val();

    $.ajax({
        type: 'post',
        url: "/log",
        data: {'mail': email, 'pword': password,'_method': 'post', '_token' : token},
        success: function(data){
            if(data == "true"){
                window.location.reload();
            }else{
                 $('.notloggedin').hide().slideDown().delay(200).slideUp();
            }
        }
    });
});

$("#login-form3").submit(function(e){
    e.preventDefault();
    var email = $(".l3-email").val();
    var password = $(".l3-password").val();
    var token = $('#token').val();

    $.ajax({
        type: 'post',
        url: "/log",
        data: {'mail': email, 'pword': password,'_method': 'post', '_token' : token},

        success: function(data){
            if(data == "true"){
                window.location.reload();
            }else{
                 $('.notloggedin').hide().slideDown().delay(200).slideUp();
            }
        }
    });
});

$(function(){
    $('.color li').click(function(){
        var id = $(this).data('value3');
        var v_id = $(this).data('id');
        var imagesArray = new Array();
        var images = $(this).data('value2');
        imagesArray = images.split(',');
        var j;
        for(j=0; j < imagesArray.length - 1; j++) {
            $('#'+id+' .item'+j).css('background-image', 'url(../images/products/'+imagesArray[j]+')');
            $('.'+id+' .item'+j).css('background-image', 'url(../images/products/'+imagesArray[j]+')');
        }
        // $('.'+id+' .item').css('background-image', 'url(../images/products/'+$(this).data('value2')+')');
        $("."+id+" .p-image").text($(this).data('value2'));
        $('#'+id).find('.add-to-cart').data('id', v_id);
        $('.'+id).find('.add-to-cart2').data('value', v_id);
        //alert($('#'+id).find('.add-to-cart').data('value'));
        $('#'+id+' .mp-price'+id).html($(this).data('price'));
        $('.'+id+' .p-price').html($(this).data('price')+' ₽');
        $('#'+id+' .des').html($(this).data('desc'));
        $('.'+id+' .des').html($(this).data('desc'));
        $('.'+id+' .det').html($(this).data('details'));
        
        var sizeArray = new Array();
        var sizes = $(this).data('size');
        sizeArray = sizes.split(',');
        
        var idArray = new Array();
        var ids = $(this).data('ids');
        idArray = ids.split(',');
        
        var i;
        for(i=0; i < sizeArray.length - 1; i++){
        	if(i==0){
        		$('#'+id+' .sizes').html("<li data-value="+sizeArray[i]+" data-id="+idArray[i]+"><h4>"+sizeArray[i].toUpperCase()+"</h4></li>");
        	}else{
        		$('#'+id+' .sizes').append("<li data-value="+sizeArray[i]+" data-id="+idArray[i]+"><h4>"+sizeArray[i].toUpperCase()+"</h4></li>");
        	}
        	if(i==0){
        		$('.'+id+' .sizes').html("<li data-value="+sizeArray[i]+" data-id="+idArray[i]+"><h4>"+sizeArray[i].toUpperCase()+"</h4></li>");
        	}else{
        		$('.'+id+' .sizes').append("<li data-value="+sizeArray[i]+" data-id="+idArray[i]+"><h4>"+sizeArray[i].toUpperCase()+"</h4></li>");
        	}
        }
    });
});
	
	