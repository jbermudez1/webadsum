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
function sforsale () {
	 $("#cupon").load("soluciones/solution-for-sales/cupon.html");
	 $("#invoice").load("soluciones/solution-for-sales/invoice.html");
	 $("#points").load("soluciones/solution-for-sales/points.html");
	 $("#tiendactrl").load("soluciones/solution-for-sales/tiendactrl.html");
	 $("#vstore").load("soluciones/solution-for-sales/vstore.html");
}
function apps () {
	 $("#apps").load("soluciones/apps/apps.html");

}
function corganizacional () {
	 $("#otraining2").load("soluciones/corganizacional/otraining.html");
	 $("#academy").load("soluciones/corganizacional/adsumacademy.html");

}
function desarrollo () {
	 $("#desarrollo").load("servicios/desarrollo-software/development.html");

}
function licencia () {
	 $("#licencia").load("servicios/licenciamiento/licensing.html");

}