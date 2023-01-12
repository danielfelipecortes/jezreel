<?php

include ("A_conexion.php");
//Variables del formulario
$ancho = 0;
$alto = 0;
$piezas = 0;
$color = " ";
$diseno = " ";
$tipo = " ";
$vinilo = " ";

//Variables finales 
$preciofinal = 0;
$resumen = " ";

if(isset($_POST["Enviar"])){

//Ingreso variables de formulario
    $ancho=$_POST["ancho"];
    $alto=$_POST["alto"];
    $piezas=$_POST["piezas"];
    $color=$_POST["color"];
    if($_POST['diseno'] == "Si"){$diseno=$_POST["diseno"];}else{$diseno="No";}
    $tipo=$_POST["tipo"];
    $vinilo=$_POST["vinilo"];
//
//Variables traidas de base de datos

$anchomat = 60;
$precmat = 6000;
//
//Constantes de costos independientes
$benmat = 1.2;
$maranc = 1;
$maralt = 1;
$carmat = 2000;
$tmcorcdis = 0.5;
$tmcorsdis = 0.5;
$tmmet = 1.5;
$tmfel = 1;
$homaq = 8000;
$transfer = 4500;

$desb = 5000;
$indi = 5000;
$dis = 7000;
$conf = 3000;
$inst = 5000;
$trans = 5000;

$tmdesb = 1;
$tmindi = 1.5;
$tmdis = 1;
$tmconf = 0.5;
$tminst = 0;
$tmtrans = 0;

if($tmdesb == 0){
	$tldesb = 0;
}elseif ($tmdesb < 1){ 
	$tldesb = $desb;
}else{
	$tldesb = $tmdesb*$desb;
}

if($tmindi == 0){
	$tlindi = 0;
}elseif ($tmindi < 1){ 
	$tlindi = $indi;
}else{
	$tlindi = $tmindi*$indi;
}

if($tmdis == 0){
	$tldis = 0;
}elseif ($tmdis < 1){ 
	$tldis = $dis;
}else{
	$tldis = $tmdis*$dis;
}

if($tmconf == 0){
	$tlconf = 0;
}elseif ($tmconf < 1){ 
	$tlconf = $conf;
}else{
	$tlconf = $tmconf*$conf;
}

if($tminst == 0){
	$tlinst = 0;
}elseif ($tminst < 1){ 
	$tlinst = $inst;
}else{
	$tlinst = $tminst*$inst;
}

if($tmtrans == 0){
	$tltrans = 0;
}elseif ($tmtrans < 1){ 
	$tltrans = $trans;
}else{
	$tltrans = $tmtrans*$trans;
}

$manoobra = $tltrans+$tlinst+$tlconf+$tldis+$tlindi+$tldesb;

$eneint = 700;
$depreciacion = 2;
//

//Variables de precio
$tmaranc = $ancho+$maranc;
$tmaralt = $alto+$maralt;

if ($ancho > 60){
 	$piezaf = 1;
}elseif ($ancho == 60){
 	$piezaf = 1;
}else{
 	$piezaf = intval($anchomat/$tmaranc);
}

if($ancho > 120 && $ancho <= 180) {
    $numfilas = $piezas*3;
}elseif ($ancho > 60 && $ancho <= 120){
    $numfilas = $piezas*2;
}elseif ($ancho == 60){
    $numfilas = $piezas;
}else{
    if(($piezas/$piezaf) == 1){
        $numfilas = 1; 
    }else{
        $numfilas = intval(($piezas/$piezaf)+1);
    }
}

$matriz = $piezaf*$numfilas;

if($ancho > 0){
	$desface = 0;
}else{
	$desface = ($numfilas*$piezaf)-$piezas;
}
 
$matusado = $numfilas*$tmaralt;

$matmet = $matusado /100;

$v1 = Intval($matmet);
$v2 = $matmet - $v1;
if( $v2 != 0){
	if($v2 > 0.50){
		$v3 = 1 - $v2;
		$v4 = $v2 + $v3;
		$totalmat = $v1 + $v4;
	}elseif($v2 == 0.50){
		$v3 = 0.50;
		$totalmat = $v1 + $v3;
	}else{
		$v3 = 0.50;
		$totalmat = $v1 + $v3;
	}
	
}else{
	$totalmat = $v1;
}

$perdida = ($precmat*20)/100;

$costomat = ($totalmat*$precmat)+$perdida;

if($tipo == "metalizado" || $tipo == "Metalizado"){
	$tmextra = $tmmet;
}elseif ($tipo == "reflectivo" || $tipo == "Reflectivo"){
	$tmextra = $tmfel;
}else{
	$tmextra = 0;
}

if($diseno == "si" || $diseno == "Si"){
	$tmcorte = $tmcorcdis;
}else{
	$tmcorte = $tmcorsdis;
}

$totaltm = ($tmcorte+$tmextra)*$totalmat;

if($tipo == "metalizado" || $tipo == "Metalizado" || $tipo == "reflectivo" || $tipo == "Reflectivo"){
	$costomaquina = ($totaltm*$homaq)+$carmat;
}else{
	$costomaquina = $totaltm*$homaq;
}

$totaltrans = $totalmat*$transfer;

if($piezas == 1){
	$totalmanoobra = ($manoobra*$totaltm)-$tlindi;
}else{
	$totalmanoobra = $manoobra*$totaltm;
}

$adicionales = ($totaltm*$eneint) + ((($costomat+$costomaquina)*$depreciacion)/100);

//Variables finales procesadas
	if($piezas == 1){
		if($diseno == "Si"){
			$resumen = 'Se realizara el corte de '.$piezas.' pieza de '. $alto.' centimetros de alto por '.$ancho.' centimetros de ancho con diseño personalizado en '.$vinilo.' '.$tipo.' de color '.$color.'.';
		}else{
			$resumen = 'Se realizara el corte de '.$piezas.' pieza de '. $alto.' centimetros de alto por '.$ancho.' centimetros de ancho sin diseño personalizado en '.$vinilo.' '.$tipo.' de color '.$color.'.';
		}
	}else{
		if($diseno == "Si"){
			$resumen = 'Se realizara el corte de '.$piezas.' piezas de '. $alto.' centimetros de alto por '.$ancho.' centimetros de ancho con diseño personalizado en '.$vinilo.' '.$tipo.' de color '.$color.'.';
		}else{
			$resumen = 'Se realizara el corte de '.$piezas.' piezas de '. $alto.' centimetros de alto por '.$ancho.' centimetros de ancho sin diseño personalizado en '.$vinilo.' '.$tipo.' de color '.$color.'.';
		}
	}
    $preciofinal = $costomat+$costomaquina+$totaltrans+$totalmanoobra+$adicionales;

	$unidad = $preciofinal/$piezas;
//Registro base de datos
    $IngresarCot = "INSERT INTO `cotizacion` (`ID`,`ancho`,`alto`,`piezas`,`color`,`diseno`,`tipo`,`vinilo`) 
    VALUES (NULL,'$ancho','$alto','$piezas','$color','$diseno','$tipo','$vinilo')";
    $IngresoCot = mysqli_query($cn,$IngresarCot);

}
mysqli_close($cn);
?>