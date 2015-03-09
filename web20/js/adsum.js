$( document ).ready( inicio );

function inicio () {
// Arrancondo Eventos
$("#pie").load("footer.html");

$("#navegacion").load("nav.html", function(){
		$(".lateralMenu").load("menuLateral.html", function(){
			$(".verMenu").click(function(){
				$(".lateralMenu").toggleClass("ocultaMenu");
		});
		
	});
});

	

}