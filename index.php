<?php
    if (isset($_POST["btnEntrar"])) {
        if ($_POST['btnEntrar']=="Acceder") {
            include("funciones.php");
            $cnn = Conectar();
            $us = $_POST['inputUsuario'];
            $clave = $_POST['inputContrasena'];
            $sql="select * from usuario where usua='$us' and clave='$clave'";
            $rs = mysqli_query($cnn,$sql);
                if (mysqli_num_rows($rs) != 0) {
                    if ($row = mysqli_fetch_array($rs)) {
                        $nom = $row[1];//el nombre 
                        $car = $row[2];//el cargo
                        $tip = $row[3];//el tipo
                        switch ($tip) {
                            case 1:
                                echo "<script>alert('Used es $nom y es $car)</script>";
                                echo "<script type='text/javascript'>window.location='menuSupervisor.php'</script>";
                                break;
                            case 2:
                                echo "<script>alert('Used es $nom y es $car)</script>";   
                                echo "<script type='text/javascript'>window.location='menuPañolero.php'</script>";
                                break;
                            case 3: 
                                echo "<script>alert('Used es $nom y es $car)</script>";   
                                echo "<script type='text/javascript'>window.location='menuTrabajador.php'</script>";
                                break;  
                            default:
                                echo "<script>alert('Usted no es Usuario')</script>";
                                echo "<script type='text/javascript'>window.location='index.php'</script>";
                                break;
                        }
                    }

                }else{
                    echo "<script>alert('Usuiario o Clave incorrecta')</script>";
                }

        }
    }
?>

<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="col-12 text-center display-4">Login Usuarios</h1>
        <div class="col-12 text-center">
            <img src="https://img.freepik.com/vector-gratis/paquete-iconos-herramientas-construccion_24908-59860.jpg" height="250px">
        </div>
        <div class="col-8 text-left">
            <form method = "POST" action="">
                <label>Usuario: </label> <input type="text" class="col-4" id="inputUsuario" name="inputUsuario">
                <br>
                <label>Contraseña: </label> <input type="password" class="col-4" id="inputContrasena" name="inputContrasena">
                <br>
                <button type="submit" class="btn btn-primary" name="btnEntrar" value="Acceder">Acceder</button>
            </form>
        </div>
	</div>
</body>
<footer>
    <table class="table-sm">
        <tbody>
            <tr>
                <th class="text-left">Integrantes:</th>
                <td class="">Maryorie Cartes&#9;</td>
                <td class="">Nayareth Quezada&#9;</td>
                <td class="">Esteban Vera</td>
                <td class="text-left">Jean Olivares</td>
            </tr>
        </tbody>
    </table>				
</footer>
</html>

