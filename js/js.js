$(document).ready(function(){

//меню
	$("li.gnb").hover(function () {
		$(this).children("a").addClass("on");
		$(this).children("div").stop(true, true).slideDown('fast');
	}, function() {
		$(this).children("div").css({"display":"none"});
		$(this).children("a").removeClass("on");
	});
	$("li.gnb a.gnb").toggle(function(){
		$(this).addClass("on");
		$(this).next("div").css({"display":"block"});
	}, function(){
		$(this).next("div").css({"display":"none"});
		$(this).removeClass("on");
	});

//Слайдеры
	$('.slider')
	.after('<div id="nav">')
	.cycle({
		fx: 'scrollLeft',
		timeout: 5000,
		pager: '#nav'
	});
	$('.td-form').cycle({
		fx: 'scrollHorz',
		timeout: 0,
		next: '.next',
		prev: '#prev'
	});

//FancyBox
	$("a.group").attr('rel', 'fancybox').fancybox({
		'hideOnContentClick': false,
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	$("a.fb").fancybox({
		'hideOnContentClick': false,
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
//LazyLoad
	$("img.lazy").lazyload({ 
		effect: "fadeIn"
	});

	
	function filterByPrice(){
		$('.car').each(function(i,o){
			var price = parseInt($(o).attr('price'));
			var min = parseInt($('#amount-min').val());
			var max = parseInt($('#amount-max').val());
			if(price >= min && price <= max || price+100000 >= min && price <= max){
				$(o).css('display','block');
			}else{
				$(o).css('display','none');
			}
		});
	};
	
	$(function() {
		var minprice = parseInt($("#prices").attr('minprice'));
		var maxprice = parseInt($("#prices").attr('maxprice'));
		
        $("#slider-range").slider({
            range: true,
			min: minprice,
            max: maxprice,
			step: 1000,
            values: [
				$('#amount-min').attr('value'),
				$('#amount-max').attr('value')
			],
            slide: function( event, ui ) {
                $("#amount-min").val( ui.values[ 0 ] );
				$("#amount-max").val( ui.values[ 1 ] );
				filterByPrice();
            }
        });
        $("#amount-min").val( $("#slider-range").slider("values", 0 ) );
		$("#amount-max").val( $("#slider-range").slider("values", 1 ) );
		filterByPrice();
    });

//Вакансии
	$('.check_all').click(function(){
		$(this).nextAll('.checkboxes').children().children('input').prop("checked", true);
		return false;
	})

	$('.uncheck_all').click(function(){
		$(this).nextAll('.checkboxes').children().children('input').prop("checked", false);
		return false;
	})

	$('.checkboxes .brand_logo').click(function(){
		if ($(this).siblings('input').prop("checked"))
			$(this).siblings('input').prop("checked", false)
		else $(this).siblings('input').prop("checked", true)
		return false;
	});
	
//Контакты
	$(".contact-list #list li").click(function () {
		var id = $(this).attr("id");
		//jQuery(".slide").css({'display':'none', 'opacity':0});
		//jQuery(".slide#"+id).css({'display':'block', 'opacity':1});
		$(this).siblings().removeClass('act');
		$(this).addClass('act');
		$(".slide").fadeOut();
		$(".slide#"+id).fadeIn();
		return false;
	});
	$('select[name=address]').change(function(){
		var id = $(this).attr("value");
		$(this).nextAll().fadeOut();
		$('.adr#'+id).fadeIn();
		return false;
	})
});