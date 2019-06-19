
<html>
    <head> 
            <title>Tabela de cadastro de exercicio</title><style type="text/css">
            *{

margin:0px;
padding: 0px;
font-family: "Yu Gothic";

font-weight: lighter;
}

h1{

color: #FFFFFF;
font-size: 60px;
text-shadow: 1px 1px 1px black;
}
header{
background: linear-gradient(135deg,#8bce48 0%, #1c799d 100%);
text-align: left;
width:100%;
color: #FFFFFF;
font-size: 30px;
}


footer{
  clear: both;
  font-size: 15px;
  color: #FFFFFF;
  width:100%;
  background: linear-gradient(135deg,#8bce48 0%, #1c799d 100%);
  text-align: center;
  position: absolute;
  bottom: 0;
  height: 30px;
}
form{

font-size: 20px;
text-align: center; 


}

            </style>
    </head>
    <body>
        <header> Cadastrar exercício </header>
        <form action="cadastraserie2.php" method="POST">

            Número de repetições <br/>
            <input type="number" name="repeticoes" required="required"><br/>
            Tempo <br/>
            <input type="text" name="tempo" require="required"><br/>
            Carga <br/>
            <input type="text" name="carga" require="required"><br/>
            Nome do exercício <br/>
                <select name="codigoexercicio" required="">
                <?php
                include "catalogoexercicio.php";
                $catalogo=new catalogoexercicio();
                foreach($catalogo->getexercicios() as $exercicios){
               ?>
               <option value="<?php echo $exercicios->getcod();?>"><?php echo $exercicios->getnome();?></option>;
                <?php } ?>
            </select><br/> 
            <input type="submit" value="Cadastrar">
            <table>
                <tr>
                    <th>Codigo</th>
                    <th>Exercício</th>
                    <th>Descrição</th>
                    <th>Repetições</th>
                    <th>Tempo</th>
                    <th>Carga</th>
                </tr>
            
                <?php
                include "tabelaserieitem.php";
                ?>
            </table>   
            </form>
            <form action="finalizar.php" >
            <input type="submit" value="Finalizar">
            </form>
         
            <footer>Made by: Gabriel Andrade, Gabriel Lincon and Neydson </footer>

    </body>
</html>