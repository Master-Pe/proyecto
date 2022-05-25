
<?php
require_once('../controlador/controladorUsuario.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Usuarios</h1>
    <table border="1" align="center">
        <thead>
            <tr>
            <tr>
                <th>Id</th>
                <th>login</th>
                <th>pass</th>
                <th>nick</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $datos = new controladorUsuario();
                $leerUsuario = $datos->leerUsuario();
                foreach($leerUsuario as $usuario){
                    echo "<tr>";
                    echo "<td>".$usuario['id_usuario']."</td>";
                    echo "<td>".$usuario['login_usuario']."</td>";
                    echo "<td>".$usuario['pass_usuario']."</td>";
                    echo "<td>".$usuario['nick_usuario']."</td>";
                    echo "<td>".$usuario['email_usuario']."</td>";
                    echo "<td>
                    <form id='frmUsuario$usuario[id_usuario]' method='POST' action='../controlador/controladorUsuario.php'>
                        <input type='hidden' name='id_usuario' value=".$usuario['id_usuario']." />
                        <button type='submit' name='Editar'>Editar</button>
                        
                        </form>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>