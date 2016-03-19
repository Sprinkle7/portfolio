$(document).ready(function() {

$("body").append('<div id="style-switcher"></div>');
$("#style-switcher").load( "styleswitcher/styleswitcher.html" );

});

$(window).load(function() {
	
	var preColorLink = $("#colors" ).attr("href");
	var preColor;
	
	if(preColorLink == "colors/orange.css") preColor = "orange";
	if(preColorLink == "colors/blue.css") preColor = "blue";
	if(preColorLink == "colors/green.css") preColor = "green";
	if(preColorLink == "colors/red.css") preColor = "red";
	if(preColorLink == "colors/violet.css") preColor = "violet";
	if(preColorLink == "colors/yellow.css") preColor = "yellow";
	
	$("#style-switcher .color-switcher li a ").each(function() {
        if($(this).hasClass(preColor)) $(this).addClass('active');
    });

	if($("#nav-content").hasClass('nav-white')) {
		$("#style-switcher .nav-switcher .ss-nav-white").addClass('active');
	}
	else {
		$("#style-switcher .nav-switcher .ss-nav-black").addClass('active');
	}

	$(".orange" ).click(function()		{ $("#colors" ).attr("href", "colors/orange.css" ); });
	$(".blue" ).click(function()			{ $("#colors" ).attr("href", "colors/blue.css" );	});
	$(".green" ).click(function()		{ $("#colors" ).attr("href", "colors/green.css" ); });
	$(".red" ).click(function()			{ $("#colors" ).attr("href", "colors/red.css" ); });
	$(".violet" ).click(function()			{ $("#colors" ).attr("href", "colors/violet.css" ); });
	$(".yellow" ).click(function()		{ $("#colors" ).attr("href", "colors/yellow.css" ); });
	
	$('.color-switcher li a').click(function(e){
		e.preventDefault();
		$(this).parent().parent().find('a').removeClass('active');
		$(this).addClass('active');
	})
	
	$('.nav-switcher .ss-nav-white').click(function(){
		$('header').removeClass('nav-black').addClass('nav-white');
		$(this).parent().parent().find('a').removeClass('active');
		$(this).addClass('active');
	})
	
	$('.nav-switcher .ss-nav-black').click(function(){
		$('header').removeClass('nav-white').addClass('nav-black');
		$(this).parent().parent().find('a').removeClass('active');
		$(this).addClass('active');
	})

	$('#style-switcher a.ss-close').click(function(e){
		e.preventDefault();
		var div = $('#style-switcher');
		if (div.css('right') === '-220px') {
			$('#style-switcher').animate({
				right: '0'
			});
			$(this).toggleClass('active');
		} else {
			$('#style-switcher').animate({
				right: '-220px'
			});
			$(this).toggleClass('active');
		}
	})
	
})