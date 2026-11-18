<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
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
    <?php
        // Incluir archivo con las funciones
        require_once("cadenas.php");
        // Procesar funciones
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['probar'])){
            $c = strval($_POST['c']);
            echo "Imprimir cadena: " . $c . "<br>";
            echo "Contar los caracteres de una cadena: ";
            echo ctr_char($c) . "<br>";
            echo "Convertir una cadena a mayúsculas: ";
            echo cvrt_mayus($c) . "<br>";
            echo "Convertir una cadena a minúsculas: ";
            echo cvrt_minus($c) . "<br>";
            echo "Invertir una cadena: ";
            echo invert_c($c) . "<br>";
            echo "Determinar si una palabra es palíndromo: ";
            echo var_export(palindromo($c), true) . "<br>";
            echo "Contar cuántas vocales contiene una cadena: ";
            echo cnt_vocals($c) . "<br>";
        }
    ?>
</body>
</html>