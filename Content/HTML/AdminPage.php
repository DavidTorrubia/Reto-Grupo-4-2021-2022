<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <title>Ecoffe - AdminPage</title>
</head>


<body>
    <div class="Header">
            <div class="Header-Background"></div>
            <div class="Header-Item Header-Item-Left-Container">
                <button type="button" class="Header-Item-Left-Container-Dropbutton"
                    id="Header-Item-Left-Container-Dropbutton" onclick="MenuDeploy()"><img class="Header-Imagen"
                        src="../Icons/MenuIcon.png" alt="imagen_menu"></button>
                <div class="Header-Item-Left-Container-Dropbutton-Content"
                    id="Header-Item-Left-Container-Dropbutton-Content">
                    <a href="../HTML/Menu.php">Menu</a>
                    <a href="../HTML/AboutUs.php">About us</a>
                </div>
            </div>
            <a href="../HTML/LandingPage.php"><img class="Header-Logo" src="../Images/Logo/LogoWhite.png" alt="logo"></a>
            <div class="Header-Item Header-Item-Right-Container">
                <div class="Header-Item-Right-Container-UserDropButtonContainer">
                    <button type="button" class="Header-Item-Right-Container-UserDropButton"
                        id="Header-Item-Right-Container-UserDropButton" onclick="UserMenuDeploy()"><img
                            class="Header-Imagen Header-Image-Usericon" src="../Images/defaultUserImage.jpg" /></button>
                    <div class="Header-Item-Right-Container-UserDropButton-Content"
                        id="Header-Item-Right-Container-UserDropButton-Content">
                        <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                            id="Header-Item-Right-Container-UserDropButton-Content-LogIn" onclick="LoginDeploy()">
                            Login</button>
                        <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu"
                            id="Header-Item-Right-Container-UserDropButton-Content-LogInMenu">
                            <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form">
                                <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                                <input type="text"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                                <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                                </h3>
                                <input type="password"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                                <input type="submit" value="Log in"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
                            </form>
                        </div>
                        <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                            id="Header-Item-Right-Container-UserDropButton-Content-SignUp" onclick="SignUpDeploy()"> Sign
                            Up</button>
                        <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu"
                            id="Header-Item-Right-Container-UserDropButton-Content-SignUpMenu">
                            <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form">
                                <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                                <input type="text"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                                <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                                </h3>
                                <input type="password"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                                <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Repeat
                                    Password
                                </h3>
                                <input type="password"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                                <input type="submit" value="Sign Up"
                                    class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
                            </form>
                        </div>
                        <div>
                            <a type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button UserConfig"
                                id="Header-Item-Right-Container-UserDropButton-Content-UserConfig "
                                href="../HTML/UserPage.php">User Config</a>
                        </div>
                        <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                            id="Header-Item-Right-Container-UserDropButton-Content-Log off"> Log off</button>
                    </div>
                </div>
                <a href="../HTML/ShoppingCart.php"><img class="Header-Imagen" src="../Icons/ShopppingListWhite.png" /></a>
                <img class="Header-Imagen Header-Imagen-Bandera" src="../Images/flags/ukflag.png" />
            </div>
        </div>
    </div>

    <div class="Content">
        <div class="Content-Buscador">
            <h1 class="Content-Buscador-Text">Buscar:</h1>
            <div class="Content-Buscador-Filtros">
                <input type="checkbox" id="Content-Buscador-Filtros-Usuarios" name="Content-Buscador-Filtros-Usuarios" value="Content-Buscador-Filtros-Usuarios">
                <label for="Content-Buscador-Filtros-Usuarios">Usuarios</label>
                <input type="checkbox" id="Content-Buscador-Filtros-Productos" name="Content-Buscador-Filtros-Productos" value="Content-Buscador-Filtros-Productos">
                <label for="Content-Buscador-Filtros-Productos">Productos</label>
            </div>
            <div class="Content-Buscador-Campos">
                <label for="Content-Buscador-Campos-ID">Buscar por ID:</label><br>
                <input type="text" id="Content-Buscador-Campos-ID" name="Content-Buscador-Campos-ID"><br>
                <label for="lname">Buscar por nombre:</label><br>
                <input type="text" id="Content-Buscador-Campos-ID" name="Content-Buscador-Campos-ID"><br>
            </div>
        </div>
        <div class="Content-Resultados">
            <h1 class="Content-Resultados-Text">Resultados</h1>
            <div class="Content-Resultados-Fields">
                <h2 class="Content-Resultados-Fields-Text">Select</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field1">Field 1</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field2">Field 2</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field3">Field 3</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field4">Field 4</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field5">Field 5</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field6">Field 6</h2>
                <h2 class="Content-Resultados-Fields-Text" 
                id="Content-Resultados-Fields-Field7">Field 7</h2>
            </div>
            <div class="Content-Resultados-Resultado">
                <input type="checkbox" id="Content-Resultados-Resultado-Checkbox" 
                name="Content-Resultados-Resultado-Checkbox">
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field1">Field 1</p>
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field2">Field 2</p>
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field3">Field 3</p>
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field14">Field 4</p>
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field5">Field 5</p>
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field6">Field 6</p>
                <p class="Content-Resultados-Resultado-Text"
                id="Content-Resultados-Resultado-Field7">Field 7</p>
            </div>
        </div>
        <div class="Content-Resultados-Content-Opciones">
        <input type="button" class="Content-Resultados-Content-Opciones-Add"
            onclick="alert('Do you want to add a new item?')" 
            value="Add">
            <input type="button" class="Content-Resultados-Content-Opciones-Modify"
            onclick="alert('Do you want to modify the selected items?')" 
            value="Modify">
            <input type="button" class="Content-Resultados-Content-Opciones-Delete"
            onclick="alert('Do you want to delete the selected items?')" 
            value="Delete">
            <input type="button" class="Content-Resultados-Content-Opciones-Save"
            onclick="alert('Do you want to delete save this changes?')" 
            value="Save">
        </div>
    </div>


    <div class="Footer">
        <div class="Footer-SelectionBar">
            <a href="AboutUs.php">About Us</a>
            <a href="">Help</a>
            <a href="https://mail.google.com/mail/u/1/?pli=1#inbox">Contact Us</a>
            <a href="AboutUs.php">Work with us</a>
            <a href="UserPage.php">Settings</a>
        </div>
        <p>ecoffe @Copyright</p>
    </div>
</body>