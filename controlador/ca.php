
<?php

    @$idalum = $_POST['idalum'];
    @$nombre= $_POST['txtnom'];
    @$apellidop = $_POST['txtap'];
    @$apellidom = $_POST['txtam'];
    @$buscar = $_POST['txtbuscar'];
    // nos traemos el archivo de la clase conexion
    require '../modelo/ma.php';
    
    // crear la instancia de la clase
    
    $lista = new lista();
    

    //funcion para eliminar
    if (isset($_GET['ideliminar'])) 
    {
    $id = $_GET['ideliminar'];
     $lista->Eliminar($id);
    }

    // armar la logica del sitio
    else if (isset($_POST['btnregistrar'])) 
    {

        if ($_POST['btnregistrar']=='Registrar') 
        {
            $lista->Registar($nombre, $apellidop, $apellidom);
                header("Location: ../controlador/ca.php");
        }
    }
    /*else if (isset($_GET['idmodificar']))
            {
                $id = $_GET['idmodificar'];
                $cat_mod = $lista->Buscar_Mod($id);  
            }

    else if ($_POST['btnmodificar1']=='Modificar')
    {
           $idalum =$_POST['idalum'];
           $lista -> Modificar($idalum, $nombre, $apellidop, $apellidom);
    }*/
    

    $result = $lista->Buscar($buscar);
    $tabla_result = $lista->Tabla_buscar($result);

    require '../vista/va.php';
?>
