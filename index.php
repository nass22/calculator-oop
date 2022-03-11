<?php

include 'controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <button>Calculate</button>
    </form>

    <p>Response = <?php echo $response ?></p>
    
</body>
</html>

