$(document).ready(function(){
	$(window).scroll(function(){
		let scroll = $(window).scrollTop();
		// DOM = document object model
		// BOM = Browser objet model

		if (scroll > 50) {
			$('#navbar').css('background','#555');
			$('#navbar a').css('color','white');
			$("#navbar a").css("text-shadow", "5px 4px 10px black")
			$('#navbar a').css('transition','color 1s ease-in');
			$('#navbar').css('transition', 'background 1s ease-in');
		}else{
			$('#navbar').css('background','transparent');
			$('#navbar a').css('color','black');
			$('#navbar a').css('text-shadow', '9px 8px 6px rgba(230,16,16,0.85)');
			$('#navbar a').css('transition', 'color 1s ease-in');
		}
	});
});