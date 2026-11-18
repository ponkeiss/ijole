<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="eztiloz.css">
</head>
<body>
    <h1>Funcioncitas y cadenitas</h1>
    <!-- Formulario en HTML -->
    <form method="Post" action="">
        <h3>Probar funcionsillas Bv</h3>
        <hr>
        <label for="c">Ingresar una palabra:</label><br>
        <input type="string" step="any" name="c" id="c" required>
        <br><br>
        <button type="submit" name="probar">probar</button>
    </form>
    <br>
    <p class="lol">
    <?php
        // Incluir archivo con las funciones
        require_once("cadenas.php");
        // Procesar funciones
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['probar'])){
            $c = strval($_POST['c']);
            echo "Imprimir cadena: " . "<strong>" .  $c . "</strong>" . "<br><br>";
            echo "Contar los caracteres de una cadena: ";
            echo "<strong>" . ctr_char($c) . "</strong>" . "<br><br>";
            echo "Convertir una cadena a mayúsculas: ";
            echo "<strong>" . cvrt_mayus($c) . "</strong>" ."<br><br>";
            echo "Convertir una cadena a minúsculas: ";
            echo "<strong>" . cvrt_minus($c) . "</strong>" . "<br><br>";
            echo "Invertir una cadena: ";
            echo "<strong>" . invert_c($c) . "</strong>" . "<br><br>";
            echo "Determinar si una palabra es palíndromo: ";
            echo "<strong>" . var_export(palindromo($c), true) . "</strong>" . "<br><br>";
            echo "Contar cuántas vocales contiene una cadena: ";
            echo "<strong>" . cnt_vocals($c) . "</strong>" . "<br><br>";
        }
    ?>
    <p>
</body>
</html>