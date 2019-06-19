<?php
include "ctrserie.class.php";
include "instrutor.class.php";
include "aluno.class.php";
session_start();
$s=$_SESSION["serie"];
$codexercicio=$_POST['codigoexercicio'];
$repeticoes=$_POST['repeticoes'];
$tempo=$_POST['tempo'];
$carga=$_POST['carga'];
$ctrserie= new ctrserie($s);
$ctrserie->insereserieitem($codexercicio,$repeticoes,$tempo,$carga);
header('Location: interface2.php');

?>