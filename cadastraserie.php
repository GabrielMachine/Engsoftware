<?php
include  "ctraluno.class.php";
session_start();
$matriculaaluno=$_POST['matriculaaluno'];
$cpfinstrutor=$_POST['cpfinstrutor'];
$categoriadaserie=$_POST['categoriadaserie'];   
$controladora = new ctraluno();
$s=$controladora->criaserie($matriculaaluno,$cpfinstrutor,$categoriadaserie);
$_SESSION["serie"]=$s;
if($s!=null)
{
    
    header('Location: interface2.php');

}

?>






