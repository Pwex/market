// Botones de filtros de productos
$(document).ready(function(){
	// Boton de lista
	$('a#btn-product-list').on('click', function(){
		$('.products-grid').hide();
		$('.products-list').show();
	});
	// Boton de Cuadricula
	$('a#btn-product-grid').on('click', function(){
		$('.products-list').hide();
		$('.products-grid').show();
	});
	// Carrucel de productos
	$('#owl-carousel-featured').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    autoWidth:true,
	    navText: ["",""]
	});
});