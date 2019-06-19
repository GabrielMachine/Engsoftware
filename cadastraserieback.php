<?php
include  "fan.php";

if (isset($_POST['matriculaaluno']) && isset($_POST['cpfinstrutor']) && isset($_POST['categoriadaserie'])) 
{
echo "oi";
$matriculaaluno=$_POST['matriculaaluno'];
$cpfinstrutor=$_POST['cpfinstrutor'];
$categoriadaserie=$_POST['categoriadaserie'];   
$fan= new fan($matriculaaluno,$cpfinstrutor,$categoriadaserie);  
$s=$fan;
}
else{
    $s=$fan->getS();
}
if($s!=null ){
    while(true){
    header('Location: interface2.php');
    $codexercicio=$_POST['codigoexercicio'];
    $repeticoes=$_POST['repeticoes'];
    $tempo=$_POST['tempo'];
    $carga=$_POST['carga'];
    $ctrserie= new ctrserie($s);
    $ctrserie->insereserieitem($codexercicio,$repeticoes,$tempo,$carga);
    }
}

?>



