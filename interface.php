<html>
    <head> 
            <title>Tabela de cadastro de série</title>
            <style type="text/css">
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
        
        <header> Cadastrar série </header>
        <form action="cadastraserie.php" method="POST">
            Matrícula aluno <br/>
            <input type="number" name="matriculaaluno" required="required"><br/>
            CPF instrutor <br/>
            <input type="number" name="cpfinstrutor" required="required"><br/>
            Categoria <br/>
            <select name="categoriadaserie" required="">
            <?php
                
                include "catalogocategserie.php";
                $catalogo=new catalogocategserie();
                foreach($catalogo->getcategorias() as $categorias)
                {
                ?>
                <option value="<?php echo $categorias->getnome();?>"><?php echo $categorias->getnome();?> </option>
                <?php } ?>
            </select>

            
            <input type="submit" value ="Cadastrar">
                    
        </form>
         
        <footer>Made by: Gabriel Andrade, Gabriel Lincon and Neydson </footer>

    </body>
</html>