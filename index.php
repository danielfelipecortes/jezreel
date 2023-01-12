<!DOCTYPE html>
<html lang="es">
	<head>
        <?php include("form.php"); ?>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<style>

    </style>
    <body>
		<form action="index.php" method="post">
        <label for="ancho">Ancho cm:</label><input type="number" id="ancho" name="ancho" value="<?=$ancho ?>"><br>
        <label for="alto">Alto cm:</label><input type="number" id="alto" name="alto" value="<?=$alto ?>"><br>
        <label for="piezas">Cantidad de piezas:</label><input type="number" id="piezas" name="piezas" value="<?=$piezas ?>"><br>
        <label for="color">Color:</label><select name="color" id="color" value="<?=$color ?>">
                                          <option value="Amarillo">Amarillo</option>
                                          <option value="Azul">Azul</option>
                                          <option value="Rojo">Rojo</option>
                                          <option value="Verde">Verde</option>
                                          <option value="Morado">Morado</option>
                                          <option value="Rosado">Rosado</option>
                                          <option value="Blanco">Blanco</option>
                                          <option value="Gris">Gris</option>
                                          <option value="Negro">Negro</option>

                                         </select><br>
        <label for="tipo">Tipo:</label><select name="tipo" id="tipo" value="<?=$tipo ?>">
                                        <option value="Normal">Normal</option>
                                        <option value="Opalizado">Opalizado</option>
                                        <option value="Metalizado">Metalizado</option>
                                        <option value="reflectivo">Reflectivo</option>
                                       </select><br>
        <label for="diseno">Diseño:</label><select name="diseno" id="diseno" value="<?=$diseno ?>">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                           </select><br>
        <label for="vinilo">Material:</label><input type="text" id="vinilo" name="vinilo" value="<?=$vinilo ?>"><br>
        <input type="submit" value="Enviar" name="Enviar"><br>
        <label for="resumen">Resumen de cotizacion:</label>
	            <input type="text" name="resumen" id="resumen" size="150px" value="<?=$resumen ?>" /><br>
        <label for="preciofinal">El precio final es:</label>
	            <input type="number" name="preciofinal" id="preciofinal" value="<?=$preciofinal ?>" /><br>
                <label for="piezaf">piezaf:</label><input type="number" id="piezaf" name="piezaf" value="<?=$piezaf ?>"><br>
                <label for="numfilas">numfilas:</label><input type="number" id="numfilas" name="numfilas" value="<?=$numfilas ?>"><br>
                <label for="matriz">matriz:</label><input type="number" id="matriz" name="matriz" value="<?=$matriz ?>"><br>
                <label for="desface">desface:</label><input type="number" id="desface" name="desface" value="<?=$desface ?>"><br>
                <label for="matusado">matusado:</label><input type="number" id="matusado" name="matusado" value="<?=$matusado ?>"><br>
                <label for="matmet">matmet:</label><input type="number" id="matmet" name="matmet" value="<?=$matmet ?>"><br>
                <label for="v1">v1:</label><input type="number" id="v1" name="v1" value="<?=$v1 ?>"><br>
                <label for="v2">v2:</label><input type="number" id="v2" name="v2" value="<?=$v2 ?>"><br>
                <label for="v3">v3:</label><input type="number" id="v3" name="v3" value="<?=$v3 ?>"><br>
                <label for="totalmat">totalmat:</label><input type="number" id="totalmat" name="totalmat" value="<?=$totalmat ?>"><br>
                <label for="perdida">perdida:</label><input type="number" id="perdida" name="perdida" value="<?=$perdida ?>"><br>
                <label for="costomat">costomat:</label><input type="number" id="costomat" name="costomat" value="<?=$costomat ?>"><br>
                <label for="tmextra">tmextra:</label><input type="number" id="tmextra" name="tmextra" value="<?=$tmextra ?>"><br>
                <label for="tmcorte">tmcorte:</label><input type="number" id="tmcorte" name="tmcorte" value="<?=$tmcorte ?>"><br>
                <label for="totaltm">totaltm:</label><input type="number" id="totaltm" name="totaltm" value="<?=$totaltm ?>"><br>
                <label for="costomaquina">costomaquina:</label><input type="number" id="costomaquina" name="costomaquina" value="<?=$costomaquina ?>"><br>
                <label for="manoobra">manoobra:</label><input type="number" id="manoobra" name="manoobra" value="<?=$manoobra ?>"><br>
                <label for="totalmanoobra">totalmanoobra:</label><input type="number" id="totalmanoobra" name="totalmanoobra" value="<?=$totalmanoobra ?>"><br>
                <label for="adicionales">adicionales:</label><input type="number" id="adicionales" name="adicionales" value="<?=$adicionales ?>"><br>
                <label for="unidad">unidad:</label><input type="number" id="unidad" name="unidad" value="<?=$unidad ?>"><br>
                <label for="dato">dato:</label><input type="number" id="dato" name="dato" value="<?=$data1 ?>"><br>



            </form>
	</body>
</html> 