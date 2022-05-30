<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/AdminPageStyle.css">
    <title>Ecoffe - AdminPage</title>
    <script src="../JS/HeaderScripts.js"></script>
</head>


<body>
    <?php include 'Header.php' ?>
    <div class="Content">
        <div class="Content-DataAlteration">
            <div class="Content-SelectionBar">
                <button class="Content-SelectionBar-Item">Usuarios</button>
                <button class="Content-SelectionBar-Item">Direcciones</button>
                <button class="Content-SelectionBar-Item">Pedidos</button>
                <button class="Content-SelectionBar-Item">Facturas</button>
                <button class="Content-SelectionBar-Item">Productos</button>
                <button class="Content-SelectionBar-Item">Tipos Productos</button>
                <button class="Content-SelectionBar-Item">Promociones</button>
            </div>
            <div class="Content-DataAlteration-Elements">
                <form class="Content-DataAlteration-Elements-Item">
                    <div class="Content-DataAlteration-Elements-Item-Container">
                        <div class="Content-DataAlteration-Elements-Item-List-Item-Example">
                            <p class="Content-DataAlteration-Elements-Item-List-Item-Info ID"> ID_USUARIO </p>
                            <p class="Content-DataAlteration-Elements-Item-List-Item-Info CORREO"> CORREO</p>
                            <p class="Content-DataAlteration-Elements-Item-List-Item-Info CONTRASENA">CONTRASENA</p>
                            <p class="Content-DataAlteration-Elements-Item-List-Item-Info NOMBRE">NOMBRE</p>
                            <p class="Content-DataAlteration-Elements-Item-List-Item-Info APELLIDOS"> APELLIDOS</p>
                            <p class="Content-DataAlteration-Elements-Item-List-Item-Info ES_ADMIN">Admin</p>
                            <input type="radio">
                        </div>
                        <div class="Content-DataAlteration-Elements-Item-List">
                            <?php
                            //Consulta para conseguir los datos del usuario 
                            $sql = "SELECT * FROM USUARIOS";
                            $result = mysqli_query($con, $sql) or die('Error');
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <label class="Content-DataAlteration-Elements-Item-List-Item">
                                    <p class="Content-DataAlteration-Elements-Item-List-Item-Info ID"> <?php echo $row["ID_USUARIO"] ?> </p>
                                    <p class="Content-DataAlteration-Elements-Item-List-Item-Info CORREO"> <?php echo $row["CORREO"] ?></p>
                                    <p class="Content-DataAlteration-Elements-Item-List-Item-Info CONTRASENA"> <?php echo $row["CONTRASENA"] ?></p>
                                    <p class="Content-DataAlteration-Elements-Item-List-Item-Info NOMBRE"> <?php echo $row["NOMBRE"] ?></p>
                                    <p class="Content-DataAlteration-Elements-Item-List-Item-Info APELLIDOS"> <?php echo $row["APELLIDOS"] ?></p>
                                    <p class="Content-DataAlteration-Elements-Item-List-Item-Info ES_ADMIN"> <?php echo $row["ES_ADMIN"] ?></p>
                                    <input type="radio" value="<?php echo $row["ID_USUARIO"] ?>" name="userselec" class="Content-DataAlteration-Elements-Item-List-Item-Radio">
                                </label>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                    <div class="Content-DataAlteration-Elements-Item-Action">
                        <label> Modificar: <input type="radio" value="1" name="Action"></label>
                        <label> Eliminar: <input type="radio" value="2" name="Action"></label>
                        <input type="submit" value="Continuar" class="Content-DataAlteration-Elements-Item-Submit">
                    </div>
                </form>
                <form class="Content-DataAlteration-Elements-Item" method="get" action="../PhpScripts/AdminSingUp.php">
                    <div class="Content-DataAlteration-Elements-Item-Style">
                        <h1 class="Content-DataAlteration-Elements-Item-Header">CREATE USER</h1>
                        <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Email</h3>
                        <input type="text" class="Content-DataAlteration-Elements-Item-Input" name="email">
                        <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Password
                        </h3>
                        <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="password">
                        <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Repeat
                            Password
                        </h3>
                        <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="repassword">
                        <label class="Content-DataAlteration-Elements-Item-Login">Is Admin? <input type="checkbox" value="1" name="isadmin"></label>
                        <label class="Content-DataAlteration-Elements-Item-Login">Log in? <input type="checkbox" value="1" name="login"></label>
                        <input type="submit" value="Create User" class="Content-DataAlteration-Elements-Item-Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="Content-Buscador">
            <h1 class="Content-Buscador-Text">Buscar:</h1>
            <div class="Content-Buscador-Filters">
                <input type="checkbox" class="Content-Buscador-FilterCheckbox" id="Content-Buscador-Filters-Usuarios" name="Content-Buscador-Filters-Usuarios" value="Content-Buscador-Filters-Usuarios">
                <label for="Content-Buscador-Filters-Usuarios" class="Content-Buscador-FilterText">Usuarios</label>

                <input type="checkbox" class="Content-Buscador-FilterCheckbox" id="Content-Buscador-Filters-Direcciones" name="Content-Buscador-Filters-Direcciones" value="Content-Buscador-Filters-Direcciones">
                <label for="Content-Buscador-Filters-Direcciones" class="Content-Buscador-FilterText">Direcciones</label>

                <input type="checkbox" class="Content-Buscador-FilterCheckbox" id="Content-Buscador-Filters-Pedidos" name="Content-Buscador-Filters-Pedidos" value="Content-Buscador-Filters-Pedidos">
                <label for="Content-Buscador-Filters-Pedidos" class="Content-Buscador-FilterText">Pedidos</label>

                <input type="checkbox" class="Content-Buscador-FilterCheckbox" id="Content-Buscador-Filters-Facturas" name="Content-Buscador-Filters-Facturas" value="Content-Buscador-Filters-Facturas">
                <label for="Content-Buscador-Filters-Facturas" class="Content-Buscador-FilterText">Facturas</label>

                <input type="checkbox" class="Content-Buscador-FilterCheckbox" id="Content-Buscador-Filters-Productos" name="Content-Buscador-Filters-Productos" value="Content-Buscador-Filters-Productos">
                <label for="Content-Buscador-Filters-Productos" class="Content-Buscador-FilterText">Productos</label>

                <input type="checkbox" class="Content-Buscador-FilterCheckbox" id="Content-Buscador-Filters-TiposProductos" name="Content-Buscador-Filters-TiposProductos" value="Content-Buscador-Filters-TiposProductos">
                <label for="Content-Buscador-Filters-TiposProductos" class="Content-Buscador-FilterText">Tipos productos</label>

                <input type="checkbox" class="Content-Buscador-FilterPromociones" id="Content-Buscador-Filters-Promociones" name="Content-Buscador-Filters-Promociones" value="Content-Buscador-Filters-Promociones">
                <label for="Content-Buscador-Filters-Promociones" class="Content-Buscador-FilterText">Promociones</label>


            </div>
            <div class="Content-Buscador-Fields">
                <label for="Content-Buscador-Fields-ID">Buscar por ID:</label><br>
                <input type="text" id="Content-Buscador-Fields-ID" name="Content-Buscador-Fields-ID"><br>
                <label for="lname">Buscar por nombre:</label><br>
                <input type="text" id="Content-Buscador-Fields-name" name="Content-Buscador-Fields-name"><br>
            </div>
            <input type="button" class="Content-Buscador-Button" onclick="alert('Se han encontrado los siguientes resultados:')" value="Buscar">
        </div>
        <div class="Content-Resultados">
            <h2 class="Content-Resultados-Text">Resultados:</h2>
            <h3 class="Content-Resultados-TextTabla">Nombre Tabla</h3>
            <table class="Content-Resultados-Tabla">
                <tr>
                    <th>Select</th>
                    <th>Campo1</th>
                    <th>Campo2</th>
                    <th>Campo3</th>
                    <th>Campo4</th>
                    <th>Campo5</th>
                    <th>Campo6</th>
                    <th>Campo7</th>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="Content-Resultados-Resultado-Checkbox" name="Content-Resultados-Resultado-Checkbox">
                    </td>
                    <td>Campo1</td>
                    <td>Campo2</td>
                    <td>Campo3</td>
                    <td>Campo4</td>
                    <td>Campo5</td>
                    <td>Campo6</td>
                    <td>Campo7</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="Content-Resultados-Resultado-Checkbox" name="Content-Resultados-Resultado-Checkbox">
                    </td>
                    <td>Campo1</td>
                    <td>Campo2</td>
                    <td>Campo3</td>
                    <td>Campo4</td>
                    <td>Campo5</td>
                    <td>Campo6</td>
                    <td>Campo7</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="Content-Resultados-Resultado-Checkbox" name="Content-Resultados-Resultado-Checkbox">
                    </td>
                    <td>Campo1</td>
                    <td>Campo2</td>
                    <td>Campo3</td>
                    <td>Campo4</td>
                    <td>Campo5</td>
                    <td>Campo6</td>
                    <td>Campo7</td>
                </tr>
            </table>
            <div class="Content-Resultados-Opciones">
                <input type="button" class="Content-Resultados-Opciones" id="Content-Resultados-Opciones-Add" onclick="alert('Quieres añadir objetos a la base de datos?')" value="Añadir">
                <input type="button" class="Content-Resultados-Opciones" id="Content-Resultados-Opciones-Modify" onclick="alert('Quieres modificar los elementos seleccionados?')" value="Modificar">
                <input type="button" class="Content-Resultados-Opciones" id="Content-Resultados-Opciones-Delete" onclick="alert('Quieres eliminar los elementos seleccionados?')" value="Eliminar">
                <input type="button" class="Content-Resultados-Opciones" id="Content-Resultados-Opciones-Save" onclick="alert('Quieres guardar los cambios realizados en la base de datos?')" value="Guardar">
            </div>
        </div>
    </div>

   <?php include 'Footer.php'?>
</body>