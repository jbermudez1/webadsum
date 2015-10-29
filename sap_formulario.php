<html> 
<META http-equiv=Content-Type content="text/html; charset=ISO-8859-1">

<!-- saved from url=(0013)about:internet -->
<head> 
     <title>Contactanos</title> 
     
<!--
Operadores logicos

== Igual
!= Diferente
|| And
-->
<style type="text/css">
input {
	width:120px; !important;
}
#tel_ext {
	width:60px;
}
select {
	width:110px;
}
</style>

     
     <script language="javascript" type="text/javascript">
     
function soloNumero(e)
{
if (document.all)
var tecla = event.keyCode;
else if(document.layers)
var tecla = e.which;
if (tecla > 47 && tecla < 58)
return true;
else
{
if (tecla != 8)
event.keyCode = 0;
else
return true;
}
}

     
     function valEmail(correo){ 
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(correo))    {
        return false;
    }else{
        return true;
    }
}
               
     	function Validaciones()
     	{
     		var mensaje;
     		var msg;
     		var errores;
     		
     		errores=0;
     		
     		mensaje= 'Existe información incompleta:\n';     		
     		
     
     		if (window.document.getElementById("tema").value == 'Seleccione un tema')
     		{
     			mensaje = mensaje + 'Seleccione un tema.\n';
     			errores = errores+1;
     		}

if (window.document.getElementById("atencion").value == 'Seleccione Metodo')
     		{
     			mensaje = mensaje + 'Seleccione un metodo de atención.\n';
     			errores = errores+1;
     		}

if (window.document.getElementById("nombre").value == '')
     		{
     			mensaje = mensaje + 'Ingrese su nombre.\n';
     			errores = errores+1;
     		}


if (window.document.getElementById("empresa").value == '')
     		{
     			mensaje = mensaje + 'Indique el nombre de su empresa.\n';
     			errores = errores+1;
     		}

if (window.document.getElementById("giro").value == '')
     		{
     			mensaje = mensaje + 'Indique el giro de su empresa.\n';
     			errores = errores+1;
     		}

if (window.document.getElementById("tel_lada").value == '')
     		{
     			mensaje = mensaje + 'Indique el codigo de area telefónica.\n';
     			errores = errores+1;
     		}
     			
     			if (window.document.getElementById("tel_numero").value == '')
     		{
     			mensaje = mensaje + 'Indique el número telefónico.\n';
     			errores = errores+1;
     		}
     			
     			if (window.document.getElementById("correo").value == '')
     		{
     			mensaje = mensaje + 'Proporcione su correo electrónico.\n';
     			errores = errores+1;
     			}
     			else if  (valEmail(window.document.getElementById("correo").value)==false)
     			 {
     				mensaje = 'El correo es incorrecto.';
     				errores = errores+1;
     				}


             if (errores==0)
			  formulario.submit();
        
             if(errores>2)
               {
               alert('Hay campos vacios y no se envia');
               return false;
               }
             else
               {     
                  if (mensaje!='Existe información incompleta:\n')
                    {
        			alert(mensaje);   
        			return false;
        			}
		      	 
		        	
			   }
			
		
					
			
     	}
     	
     	
     	
     
     	     	
     </script> 
     </head>
		<body bgcolor="#FFFFFF" bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0" font color="#00000"> 
		<? 
if (!$HTTP_POST_VARS){ 
?> 
<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" background="img/Sin-título-4.jpg" style="background-repeat: no-repeat; background-position: top right"> 
		
		<form action="sap_formulario.php" id="formulario" method=post> 
		
		<table border="0" width="100%" id="principal" height="147">
			<tr>
				<td valign="top">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td height="64">
							<p class="titulos" style="margin-top: 0; margin-bottom: 0">
							&nbsp;<h3>¡Estamos sus ordenes!</h3>
							<p class="sub" style="margin:0cm;margin-bottom:.0001pt">
							Para atenderle como usted merece, por favor 
							proporcione la siguiente información; Los campos 
							marcados <font color="#F0AF1D">(*)</font> son 
							obligatorios.</td>
					</tr>
					<tr>
						<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="48%" valign="top">
						<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
							&nbsp;</p>
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								¿Sobre qué tema necesita más información? 
							<font color="#F0AF1D">(*)</font></p>
							<p class="sub" style="margin-top: 0; margin-bottom: 0">
							Marque el tema sobre el que necesita recibir más 
							información</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								&nbsp;</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
							<select size="1" name="tema" id="tema">
							<option value="Seleccione un tema" selected>
							Seleccione un tema</option>
							<option value="Soluciones para Vender Más">Soluciones para Vender Más</option>
							<option value="Soluciones de Negocio">Soluciones de Negocio</option>
							<option value="Licenciamiento">Licenciamiento</option>
							<option value="App para Mobiles">App para Mobiles</option>
							<option value="Desarrollo de Software a la medida">Desarrollo de Software a la medida</option>
							<option value="Comercio Electrónico">Comercio Electrónico</option>
							<option value="Sistemas ERP">Sistemas ERP</option>
							<option value="Inteligencia de Negocios">Inteligencia de Negocios</option>
							<option value="Sistemas para Médicos">Sistemas para Médicos
							</option>
							<option value="Recursos Humanos">Recursos Humanos
							</option>
							<option value="Finanzas">Finanzas</option>
							</select></p></td>
								<td width="77">&nbsp;</td>
								<td width="48%" valign="top">
						<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
							&nbsp;</p>
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								¿Qué tipo de atención quisiera recibir? 							<font color="#F0AF1D">(*)</font></p>
							<p class="sub" style="margin-top: 0; margin-bottom: 0">
							Marque el método por el cual desea recibir más 
							información</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								&nbsp;</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
							<select size="1" name="atencion" id="atencion">
							<option value="Seleccione Metodo" selected>
							Seleccione Metodo
							</option>
							<option value="Información vía e-mail">Información 
							vía e-mail</option>
							<option value="Asistencia telefónica">Asistencia 
							telefónica</option>
							<option value="Asistencia personalizada">Asistencia 
							personalizada</option>
							</select></p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								&nbsp;</p></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top"><hr size="1" color="#DBDBDB">
						<p class="titulos" style="margin-top: 0; margin-bottom: 0">
						Información de contacto</p>
						<p class="sub" style="margin:0cm;margin-bottom:.0001pt">
						Proporciónenos datos que nos ayudara a ponernos en 
						contacto con usted y proporcionarle la información que 
						necesite</p>
						&nbsp;</td>
					</tr>
					<tr>
						<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
							<tr>
								<td width="199" valign="top">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Nombre completo (*)</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Eje. Miguel Robles Rojas</p>
								<p><input type="text" name="nombre" id="nombre" size="10"></td>
								<td valign="top" width="210">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Cargo / Puesto</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Eje. Director de operaciones</p>
								<p><input type="text" name="cargo" id="cargo" size="21"></td>
								<td valign="top">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Empresa <font color="#F0AF1D">(*)</font></p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Eje. Multiservicios S.A.de C.V.</p>
								<p><input type="text" name="empresa" id="empresa" size="21"></td>
								<td valign="top" width="200">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Giro <font color="#F0AF1D">(*)</font></p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Eje. Comercialización</p>
								<p><input type="text" name="giro" id="giro" size="21"></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top">&nbsp;</td>
					</tr>
					<tr>
						<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
							<tr>
								<td width="199" valign="top">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Número de empleados</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Seleccione</p>
								<p><select size="1" name="num_empleados" id="num_empleados">
								<option>De 1 a 10</option>
								<option>De 10 a 50</option>
								<option>De 50 a 100</option>
								<option>Más de 100</option>
								</select></td>
								<td valign="top" width="421">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Lada /
								Número Telefónico /&nbsp; Ext. (*)</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Eje. 667 7161787 201  </p>
								<p>
								&nbsp;<input type="text" name="tel_lada" id="tel_lada" size="4" maxlength="4" onKeypress="return soloNumero(event);">
								<input type="text" onKeypress="return soloNumero(event);"name="tel_numero" id="tel_numero" size="21">
								<font face="Arial" style="font-size: 9pt" color="#0D589C">
								Ext</font>.<!--webbot b-value-required="TRUE" bot="Validation" i-maximum-length="4" i-minimum-length="4" s-data-type="Number" s-number-separators=",." --><input type="text" name="tel_ext" size="4" id="tel_ext" maxlength="4"onKeypress="return soloNumero(event);"></td>
								<td valign="top" width="199">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Correo Electrónico <font color="#F0AF1D">(*)</font></p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Eje. Miguelr@multiservicios.com</p>
								<p><input type="text" name="correo" id="correo" size="21"></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top">&nbsp;</td>
					</tr>
					<tr>
						<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
							<tr>
								<td width="164" valign="top">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								País</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Seleccione</p>
								<p><select size="1" name="pais" id="pais">
								<option>México</option>
								</select></td>
								<td valign="top" width="197">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Estado</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Seleccione</p>
								<p>&nbsp;<select size="1" name="estado" id="estado">
								<option>Sinaloa</option>
								</select> </td>
								<td valign="top" width="277">
								<p class="titulos2" style="margin-top: 0; margin-bottom: 0">
								Ciudad</p>
								<p class="sub" style="margin-top: 0; margin-bottom: 0">
								Seleccione</p>
								<p><select size="1" name="ciudad" id="ciudad">
								<option>Culiacán</option>
								</select></td>
								<td valign="top" width="640">
								<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arial" style="font-size: 9pt; font-weight: 700" color="#008000">
								¡INFORMACIÓN! </font></p>
								<p style="margin-top: 0; margin-bottom: 0" align="justify">
								<font face="Arial" style="font-size: 9pt" color="#666666">
								La información proporcionada es totalmente 
								confidencial y de uso informativo con el 
								propósito de proporcionarle información 
								orientada a sus necesidades y requerimientos, y 
								de ninguna manera transferible o para otros 
								fines.</font></p>
								<p><input type=button class="btn btn-success" value="Enviar" style="float: right" onclick="javascript:Validaciones();"></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="68%">
								<p align="left" style="margin-top: 0; margin-bottom: 0">
								<font face="Arial" style="font-size: 9pt" color="#333333">
								Adsum® Software experiencie. </font>
								<font face="Arial" style="font-size: 9pt" color="#999999">
								Río San Lorenzo Ote. 39-A Col. Guadalupe C.P. 
								80220 Culiacán, Sinaloa, Mexico. </font>
								<font face="Arial" style="font-size: 9pt" color="#0D589C">
								Tel: + 52 (667) 716 1787 / 712 1639 </font></p>
								<p align="left" style="margin-top: 0; margin-bottom: 0">
								<font face="Arial" style="font-size: 9pt" color="#333333">
								E-mail: info@adsum.com.mx</font></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
			&nbsp;</p>
		</form>
		</td>
	</tr>
		</table>

<? 
}else{ 
  
    			 $cuerpo = ":: Información enviada desde adsum.com.mx ::\n"; 
    			 $cuerpo .= "Tema sobre el que se solicita información: " . $HTTP_POST_VARS["tema"] . "\n"; 
    			 $cuerpo .= "Metodo por el que se solicita información: " . $HTTP_POST_VARS["atencion"] . "\n"; 
    				$cuerpo .= "Nombre del solicitante: " . $HTTP_POST_VARS["nombre"] . "\n";  
     			  $cuerpo .= "Cargo: " . $HTTP_POST_VARS["cargo"] . "\n";
        	      $cuerpo .= "Empresa: " . $HTTP_POST_VARS["empresa"] . "\n";
    			 $cuerpo .= "Giro de la Empresa: " . $HTTP_POST_VARS["giro"] . "\n"; 
    			  $cuerpo .= "Numero de empleados: " . $HTTP_POST_VARS["num_empleados"] . "\n";
    			   $cuerpo .= "Telefono: " . $HTTP_POST_VARS["tel_lada"] . "";
    			    $cuerpo .= " " . $HTTP_POST_VARS["tel_numero"] . "";
    			     $cuerpo .= " " . $HTTP_POST_VARS["tel_ext"] . "\n";
    			      $cuerpo .= "Correo Electrónico: " . $HTTP_POST_VARS["correo"] . "\n";
    			       $cuerpo .= "Pais: " . $HTTP_POST_VARS["pais"] . "\n";
    			        $cuerpo .= "Estado: " . $HTTP_POST_VARS["estado"] . "\n";
    			         $cuerpo .= "Ciudad: " . $HTTP_POST_VARS["ciudad"] . "\n";


     mail("javier.bermudez@adsum.com.mx,info@adsum.com.mx","adsum.com.mx",$cuerpo); 
     echo "<br><font face='Arial' style='font-size: 12pt; font-weight: 700' color='#0D589C'> ¡Sus datos fueron enviados correctamente!</font> <br>";
     
echo "<font face='Arial' style='font-size: 10pt; font-weight: 700' color='#808080'>Uno de nuestros ejecutivos se pondrá en contacto con usted.</font>";
     } 



?>  
</body> 
</html>