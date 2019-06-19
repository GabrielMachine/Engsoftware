
<?php
include "catalogocategserie.php";


    $cat= new catalogocategserie();
         foreach($cat->getcategorias() as $categorias)
   
{?>
<tr>
    <td><?php echo $categorias->getnome();?></td>
    <td><?php echo $categorias->getdesc();?></td>
</tr>
<?php } ?>

         