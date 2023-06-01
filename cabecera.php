<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function menus($menu)
    {
        <div class="menu-principal">
        <ul>
         <li>
 <?php       if ($menu=="inicio") { ?><a class="active" href="index.php">Inicio</a>  <?php }
             else { ?> <a href='index.php'>Inicio</a> <?php  }    ?>
         </li>
         
         <li>
 <?php       if ($menu=="ed"){ ?> <a class="active" href="DAM1/EntornosDesarrollo/">Entornos de Desarrollo</a> <?php }
             else{ ?> <a href="DAM1/EntornosDesarrollo/">Personas </a> <?php  } ?>
       </li>
       
       <li>
 <?php       if ($menu=="bbdd"){ ?> <a class="active" href="DAM1/BBDD/">Bases de Datos</a> <?php }
             else{ ?> <a href="DAM1/BBDD">Bases de datos</a> <?php  } ?>
       </li>

       <li>
 <?php       if ($menu=="pueblos"){ ?> <a class="active" href="query-pueblos.php?nombre=">Pueblos</a> <?php }
             else{ ?> <a href="query-pueblos.php?nombre=">Pueblos</a> <?php  } ?>
       </li>

       <li>
 <?php       if ($menu=="propietarios"){ ?> <a class="active" href="insertar-propietarios.php">Propietarios</a> <?php }
             else{ ?> <a href="insertar-propietarios.php">Propietarios</a> <?php  } ?>
       </li>
 <li>
 <?php       if ($menu=="captacion"){ ?> <a class="active" href="informe-valoracion-inmueble.php">Captacion</a> <?php }
             else{ ?> <a href="informe-valoracion-inmueble.php">Captacion</a> <?php  } ?>
       </li>

 </ul>
 </div>
<?php   } 

    }
?>