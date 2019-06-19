<?php

include "aluno.class.php";
include "exercicio.class.php";

session_start();

if($_SESSION['serie']->getserieitens()==null)
{
    header( "refresh:1; interface2.php" );
}
else
{   
    ?>
    <html>
        <head>

        </head>

            <body>
             <strong> CADASTRO EFETUADO </strong>
            </body>
    </html>
    <?php
    header("refresh:2; interface.php");
   
}
?>