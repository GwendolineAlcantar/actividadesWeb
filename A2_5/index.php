<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>calculadora</h1>
    <br>
    <form method="POST" class="form-group">
        <label for="num1">Numero 1</label>
        <input id="num1" name="num1" class="num1" type="text">
        <br>
        <br>
        <label for="num2">Numero 2</label>
        <input id="num2" name="num2" class="num2" type="text">
        <br>
        <br>
        <table>
            <td>
            <th>
                <button name="suma" type="submit">+</button>
            </th>
            <th>
                <button name="resta" type="submit">-</button>
            </th>
            </td>
            <th>
                <button name="mult" type="submit">*</button>
            </th>
            <th>
                <button name="divi" type="submit">/</button>
            </th>
        </table>
        <br>
        <br>
    </form>
    <label for="res">Resultado</label>
    <?php
    include_once('calculadora.php');
    ?>

</body>

</html>