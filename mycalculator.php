<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bathic Math Operation</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="result">
    <?php
    $total = 0;
    $num1 = $_GET['num1'] ?? null;
    $num2 = $_GET['num2'] ?? null;
    $operator = $_GET['operator'] ?? '+';
    if ($num1 && $num2) {
        $total = eval('return ' . $num1 . $operator . $num2 . ';');
    }
    ?>
</div>
<h1>My calculator</h1>
<div class="container-fluid">
    <div class="mycalculator">
        <form method="get">
            <label for="">Enter your number:</label>
            <input value="<?= $_GET['num1'] ?>" type="number" name="num1" min="0" max="100">
            <br>
            <label for="operator">Operator: </label>
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
            <br>
            <label for="">Enter your number:</label>
            <input value="<?= $_GET['num2'] ?>" type="number" name="num2" min="0" max="100">
            <br>
            <button type="submit">Submit</button>
            <br>
            <br>
            <div class="result">
                <label for="answer">Answer:</label>
                <button><?= $total; ?></button>
            </div>
        </form>
    </div>
</div>

<style>
    body {
        background-color: #acff73;
    }

    h1 {
        text-align: center;
        margin: 50px;
    }

    .container-fluid {
        width: 300px;
        height: 200px;
        background-color: #c7c6ff;
        margin: 100px auto;
    }
</style>
</body>
</html>