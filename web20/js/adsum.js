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


function bsolutions () {
	 $("#qualis").load("soluciones/business-solution/qualis.html");
	 $("#salutis").load("soluciones/business-solution/salutis.html");
	 $("#otraining").load("soluciones/business-solution/otraining.html");
	 $("#bistroft").load("soluciones/business-solution/bistroft.html");
	 $("#kredits").load("soluciones/business-solution/kredits.html");

}

