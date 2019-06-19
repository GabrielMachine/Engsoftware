<?php
include "instrutor.class.php";
include "aluno.class.php";
include "categoriaserie.class.php";
session_start();

foreach($_SESSION['serie']->getserieitens() as $serieitem){
?>

<tr>
    <td><?php echo $serieitem->getexercicio()->getcod();?></td>
    <td><?php echo $serieitem->getexercicio()->getnome();?></td>
    <td><?php echo $serieitem->getexercicio()->getdesc();?></td>
    <td><?php echo $serieitem->getrepeticoes()?></td>
    <td><?php echo $serieitem->gettempo()?></td>
    <td><?php echo $serieitem->getcarga()?></td>
</tr>
<?php } ?>