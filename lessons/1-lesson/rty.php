<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My calculator</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div class="result">
    <?
    $total = 0;
    $num1 = $_GET['num1']??null;
    $num2 = $_GET['num2']??null;
    $select = $_GET['select']??'+';
    if ($num1 && $num2){
        $total = eval('return '. $num1.$select.$num2. ';' );
    }
    ?>
</div>

<div class="mycalculator">
    <form method="get" action="">
        <p>
            <label for="">Number1</label>
            <input value="<?=$_GET['num1']?>" name="num1" type="number" min="0" max="100">
        </p>
        <p>
            <label for="operator">Operator</label>
            <select name="select" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </p>
        <p>
            <label for="">Number2</label>
            <input value="<?=$_GET['num2']?>" name="num2" type="number" min="0" max="100">
        </p>

        <button name="submit" type="submit">Submit</button><br>
        <div class="answer">
            <label for="">Answer</label>
            <input type="number" name="answer" value="<?=$total?>">
        </div>
    </form>
</div>

</body>
</html>