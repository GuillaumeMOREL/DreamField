$(function() {
 
	//	create carousel
	$('#carrou-2').carouFredSel({
		responsive: true,
		items: {
			width: 200,
			height: '60%',
			visible: 5
		},
		auto: {
			items: 1
		},
		prev: '#prev',
		next: '#next'
	});
 
	//	re-position the carousel, vertically centered
	var $elems = $('#wrapper, #prev, #next'),
		$image = $('#carrou-2 img:first')
 
	$(window).bind( 'resize.example', function() {
		var height = $image.outerHeight( true );
 
		$elems
			.height( height )
			.css( 'marginTop', -( height/2 ) );
 
	}).trigger( 'resize.example' );
 
});