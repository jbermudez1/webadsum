<?
if (!$HTTP_POST_VARS){
?>
	        	<h4 style="color:#1868cc;">Cont&aacute;ctenos, hablemos de su negocio</h4>
	        	 <form name="form1" id="form1" method="post" action="form-index.php" class="navbar-search pull-left">
				    <input name="nombre" id="nombre" style="float:left" type="text" class="search-query" placeholder="Nombre Completo">
				    <input name="empresa" id="empresa" style="float:left; margin-left:40px;" type="text" class="search-query" placeholder="Empresa"><br><br>
				    <input name="email" id="email" style="float:left;" type="text" class="search-query" placeholder="E-mail">
				    <input name="telefono" id="telefono" style="float:left; margin-left:40px;" type="text" class="search-query" placeholder="No. Telefono / Celular"><br><br>
				    <div style="text-align:left">
				    	<button type="submit" class="btn btn-primary" onclick="javascript:form1.submit()">Enviar</button>
				    </div>

    </form>
<?
}else{
    //Estoy recibiendo el formulario, compongo el cuerpo
   $cuerpo = "Datos desde adsum.com.mx / INDEX \n\n";
    $cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . "\n";
    $cuerpo .= "Empresa: " . $HTTP_POST_VARS["empresa"] . "\n";
    $cuerpo .= "email: " . $HTTP_POST_VARS["email"] . "\n";
        $cuerpo .= "telefono: " . $HTTP_POST_VARS["telefono"] . "\n";


//$encabezados = "From: $email\nReply-To: $email\nContent-Type: text/html; charset=iso-8859-1"

    //mando el correo...
    mail("info@adsum.com.mx","Nuevo prospecto adsum, estos son sus datos...",$cuerpo, $encabezados); 
    
    
    //doy las gracias por el envio
   echo '<script type="text/javascript">
		  function redirection(){  
			  window.location ="gracias.php";
			  }  setTimeout ("redirection()", 0); //tiempo en milisegundos
			  </script>';
			
}
?>
