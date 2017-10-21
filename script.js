$(document).ready(function(){
	
	/* Ana Manþet */
	var sure_m = 4000; 
	var pDeger_m = 0;
	var pToplam_m = $(".manset_list_buton li").length;
	$(".manset_list_buton li:first").addClass("aktif");
	$(".manset_list_buton li").hover(function(){
		var indis_m = $(this).index();
		$(".manset_list_buton li").removeClass("aktif");
		$(this).addClass("aktif");
		$(".manset_list_img li").hide();
		$(".manset_list_img li:eq("+indis_m+")").show();
		pDeger_m = indis_m;
	});
	
	$.pDondur_m = function(){
		$(".manset_list_buton li").removeClass("aktif");
		$(".manset_list_img li").hide();
		if (pDeger_m < pToplam_m - 1){
			pDeger_m++;
			$(".manset_list_buton li:eq("+pDeger_m+")").addClass("aktif");
			$(".manset_list_img li:eq("+pDeger_m+")").show();
		}else {
			$(".manset_list_buton li:first").addClass("aktif");
			$(".manset_list_img li:first").show();
			pDeger_m = 0;
		}
	}
	
	var dondur_m = setInterval("$.pDondur_m()", sure_m);
	$(".manset_list_img li").hover(function(){
		clearInterval(dondur_m);
	}, function(){
		dondur_m = setInterval("$.pDondur_m()", sure_m);
	});
	
	$(".manset_list_buton li").hover(function(){
		clearInterval(dondur_m);
	}, function(){
		dondur_m = setInterval("$.pDondur_m()", sure_m);
	});	
	
});
