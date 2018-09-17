
$( document ).ready(function() {
    console.log( "ready!" );
    $("#js_up").on('click', function (e) { 
  			e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
  			$("body,html").animate({ // aplicamos la función animate a los tags body y html
    		scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
  			},700); //el valor 700 indica que lo ara en 700 mili segundos

});
});	