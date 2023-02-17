<?php
require '../bd/conexion_bd.php';

class lista extends BD_PDO
{     
    function Buscar($buscar)
    {
        $result = $this->Ejecutar_Instruccion("Select * from alumnos where nombre like '%$buscar%'");
        return $result;
    }
    function Eliminar($id)
    {
        $this->Ejecutar_Instruccion("delete from alumnos where idalum ='$id'");
    }
    function Registar($nombre, $apellidop, $apellidom)
    {
        $this->Ejecutar_Instruccion("Insert into alumnos (nombre, apellidop, apellidom) values('$nombre','$apellidop','$apellidom')");
    }
    /*function Modificar($idalum, $nombre, $apellidop, $apellidom)
    {
        $this->Ejecutar_Instruccion("update alumnos set nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom' where idalum='$idalum'");
    }

    function Buscar_Mod($id)
    {
         $cat_mod = $this->Ejecutar_Instruccion("select * from alumnos where idalum = '$id'");
         return $cat_mod;  
    }*/
    function Tabla_buscar($result)
    {
        $tabla="";
         foreach ($result as $renglon) 
         {
    
        $tabla.='<tr>';
        $tabla.='<td>'.$renglon[0].'</td>';
        $tabla.='<td>'.$renglon[1].'</td>';
        $tabla.='<td>'.$renglon[2].'</td>';
        $tabla.='<td>'.$renglon[3].'</td>';
        $tabla.='<td><input type="button" id="btneliminar" name="btneliminar" value="eliminar" onclick="javascript: eliminar('.@$renglon[0].');"></td>';
        // $tabla.='<td><input type="button" id="btnmodificar" name="btnmodificar" value="modificar" onclick="javascript: modificar('.$renglon[0].');"></td>';
        }
        return $tabla;        
    }
}