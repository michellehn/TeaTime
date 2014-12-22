$(document).ready(function(){
    
    // Adds the class 'active' to the current page in the menu bar
    // Works for relative and absolute hrefs
    var url = window.location.href;
    var menuArray = ["#navtea","#navyogurt","#navnews","#navcatering"]
    
    $('#mainmenu a').filter(function() {
        return this.href == url;
    }).addClass('active');
    
    $('#promotiontitle ul li a').filter(function() {
        return this.href == url;
    }).addClass('active');
    
    
    //slidedown function for the menu on mobile
    $("#menuicon").click(function(){
        $("#mainmenu").slideToggle();
    });
    
    
    //promotions hide & show
    var $promotiontitle = $("#promotiontitle");
    var $promopos = $promotiontitle.offset();
    var $w = $(window);
    
    $("#promo1").show();
    $("#title1").addClass("selected")
    
    $("#title1").click(function(){
        $("#promo1").toggle(800,"swing");
	$("#title1").addClass("selected")
        $("#promo2, #promo3, #promo4, #promo5").hide(800,"swing");
	$("#title2, #title3, #title4, #title5").removeClass("selected")
    });
    
    $("#title2").click(function(){
        $("#promo2").toggle(800,"swing");
	$("#title2").addClass("selected")
        $("#promo1, #promo3, #promo4, #promo5").hide(800,"swing");
	$("#title1, #title3, #title4, #title5").removeClass("selected")
    });
    
    $("#title3").click(function(){
        $("#promo3").toggle(800,"swing");
	$("#title3").addClass("selected")
        $("#promo1, #promo2, #promo4, #promo5").hide(800,"swing");
	$("#title2, #title1, #title4, #title5").removeClass("selected")
    });
    
    $("#title4").click(function(){
        $("#promo4").toggle(800,"swing");
	$("#title4").addClass("selected")
        $("#promo1, #promo2, #promo3, #promo5").hide(800,"swing");
	$("#title2, #title3, #title1, #title5").removeClass("selected")
    });
    
    $("#title5").click(function(){
        $("#promo5").toggle(800,"swing");
	$("#title5").addClass("selected")
        $("#promo1, #promo2, #promo3, #promo4").hide(800,"swing");
	$("#title2, #title3, #title4, #title1").removeClass("selected")
    });
    
    
    //tea tabs
    var $icedteaitems = $('#icedteaitems');
    var $icedmilkteaitems = $('#icedmilkteaitems');
    var $healthydrinksitems = $('#healthydrinksitems');
    var $hotteaitems = $('#hotteaitems');
    var $hotmilkteaitems = $('#hotmilkteaitems')
    var $traditionalchineseteaitems = $('#traditionalchineseteaitems')
    var $flavoredsmoothiesitems = $('#flavoredsmoothiesitems')
    var $traditionalicedteaitems = $('#traditionalicedteaitems')
    
    var itemArray = [$icedteaitems,$icedmilkteaitems,$healthydrinksitems,$hotteaitems,
	$hotmilkteaitems,$traditionalchineseteaitems,$flavoredsmoothiesitems,$traditionalicedteaitems]

    var $icedtea = $('#icedtea');
    var $icedmilktea = $('#icedmilktea');
    var $healthydrinks = $('#healthydrinks');
    var $hottea = $('#hottea');
    var $hotmilktea = $('#hotmilktea')
    var $traditionalchinesetea = $('#traditionalchinesetea')
    var $smoothies = $('#smoothies')
    var $traditionalicedtea = $('#traditionalicedtea')
    
    var nameArray = [$icedtea,$icedmilktea,$healthydrinks,$hottea,$hotmilktea,
		     $traditionalchinesetea,$smoothies,$traditionalicedtea]
    
    $icedteaitems.show();
    $icedtea.addClass('teaselect');
    $.each(nameArray,function(){
	$(this).hover( function(){
	    $(this).css({"background":"#cddf73","color":"#ffffff"});
	},
	function(){
	    $(this).css({"background":"#ffffff","color":"#617015"});
	});
    });
    $icedtea.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$icedteaitems.toggle(800,"swing");
	$icedtea.addClass("teaselect");
    });

    $icedmilktea.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$icedmilkteaitems.toggle(800,"swing");
        $icedmilktea.addClass("teaselect");
    });
    
    $healthydrinks.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$healthydrinksitems.toggle(800,"swing");
        $healthydrinks.addClass("teaselect");
    });
    
    $hottea.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$hotteaitems.toggle(800,"swing");
        $hottea.addClass("teaselect");
    });
    
    $hotmilktea.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$hotmilkteaitems.toggle(800,"swing");
        $hotmilktea.addClass("teaselect");
    });
    
    $traditionalchinesetea.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$traditionalchineseteaitems.toggle(800,"swing");
        $traditionalchinesetea.addClass("teaselect");
    });
    
    $smoothies.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$flavoredsmoothiesitems.toggle(800,"swing");
        $smoothies.addClass("teaselect");
    });
    
    $traditionalicedtea.click(function(){
        $.each(itemArray, function(){
	    $(this).hide();
	});
	$.each(nameArray, function(){
	    $(this).css("color","#617015");
	    $(this).removeClass("teaselect");
	});
	$traditionalicedteaitems.toggle(800,"swing");
        $traditionalicedtea.addClass("teaselect");
    });
    
    //$(document).click(function() {
	//$(document).getElementById('dairy').css("display","none");
    //});
});


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
