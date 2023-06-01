<?php
function menus($menu)
    { ?>
        <div class="menu-principal">
        <ul>
         <li>
 <?php
            if ($menu=="inicio") {
                  $directorio=""; ?>
                  <a class="active" href="index.php">Inicio</a>  <?php
                  }
             else {
                  $directorio="../../"; ?>
                  <a href='index.php'>Inicio</a> <?php
                  }    ?>
         </li>
         
         <li>
 <?php       if ($menu=="ed"){ ?>
                  <a class="active"
                        href=<?php echo "'".$directorio."DAM1/EntornosDesarrollo/'>
                        Entornos de Desarrollo </a>";
                  }
             else{ ?> <a href="../../DAM1/EntornosDesarrollo/">Personas </a> <?php  } ?>
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
<?php   }   ?>