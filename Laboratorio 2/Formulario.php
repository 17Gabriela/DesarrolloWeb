<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <?php
        switch($_GET["select"]){
            case "1":
    ?>
    <form action="fibonacci.php">
        <label form="n">Introduzca número:</label>
        <input type="text" name="num">
        <input type="submit">
    </form>
        <?php  
            break;
            case "2":
        ?>
        <form action="Menor.php">
            <label form="n1">Introduzca primer número:</label>
            <input type="text" name="num1"><br><br>
            <label form="n2">Introduzca segundo número:</label>
            <input type="text" name="num2"><br><br>
            <label form="n3">Introduzca tercer número:</label>
            <input type="text" name="num3"><br><br>
            <input type="submit">
        </form>
        <?php  
            break;
            case "3":
        ?>
        <form action="Piramide.php" method="POST">
        <label form="CADENA">Introduzca una cadena:</label>
        <input type="text"  name="CADENA">
        <input type="submit" value="enviar">
    </form>        
    <?php  
        }
    ?>    
</body>
</html>