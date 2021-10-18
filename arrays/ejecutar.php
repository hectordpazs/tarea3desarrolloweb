<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Resultado</title>
</head>
<body>
<?php
if(isset($_POST['enviar'])) {

    $trabajador[0] = ['nombre'=>$_POST['nombre1'],'apellido'=>$_POST['apellido1'],'cedula'=>$_POST['cedula1'],'sueldo'=>$_POST['sueldo1'],'departamento'=>$_POST['departamento1'],'lugar'=>$_POST['lugar1']];
    $trabajador[1] = ['nombre'=>$_POST['nombre2'],'apellido'=>$_POST['apellido2'],'cedula'=>$_POST['cedula2'],'sueldo'=>$_POST['sueldo2'],'departamento'=>$_POST['departamento2'],'lugar'=>$_POST['lugar2']];
    $trabajador[2] = ['nombre'=>$_POST['nombre3'],'apellido'=>$_POST['apellido3'],'cedula'=>$_POST['cedula3'],'sueldo'=>$_POST['sueldo3'],'departamento'=>$_POST['departamento3'],'lugar'=>$_POST['lugar3']];

    echo '<h1>REGISTRO DE EMPLEADOS</h1>';
    $cont = 1;
    foreach ($trabajador as $tra){
        
        echo '<h1>Datos del trabajador '.$cont.'</h1>';
        echo '<h3>Nombre: '.$tra['nombre'].'</h3>';
        echo '<h3>Apellido: '.$tra['apellido'].'</h3>';
        echo '<h3>Cedula: '.$tra['cedula'].'</h3>';
        echo '<h3>Sueldo: '.$tra['sueldo'].'</h3>';
        echo '<h3>Departamento: '.$tra['departamento'].'</h3>';
        echo '<h3>Lugar de trabajo: '.$tra['lugar'].'</h3>';
        echo '<hr>';
        $cont++;
    }
}
?>
</body>
</html>