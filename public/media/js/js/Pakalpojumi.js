
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<div id="controls">',
		controlsAfter:	'</div>',
		auto: true,
		speed: 1400,
		pause: 3000,
		continuous: true
	});
	$("#slider2").easySlider({
		controlsBefore:	'<div id="controls2">',
		controlsAfter:	'</div>',	
		prevId: 'prevBtn2',
		nextId: 'nextBtn2',
		auto: true,
		continuous: true,
		speed: 1500,
		pause: 2900

	});
});
