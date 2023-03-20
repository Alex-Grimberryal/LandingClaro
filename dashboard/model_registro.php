<?php
    require '../dashboard/db.php';
    class Registro_datos{
        public function buscar_usuario($arg_usuario)
                {
                    $filas=null;
                    $model=new Conexion();
                    $conexion=$model->get_conexion();
                    $sql="SELECT * FROM users WHERE email='$arg_usuario';";
                    $sentencia=$conexion->prepare($sql);
                    
                    $sentencia->execute();
                    while($resultado=$sentencia->fetch())
                    {
                        $filas[]=$resultado;
                    }
                    return $filas;
                    $conexion=$model->get_desconexion();	
                }
            }
?>