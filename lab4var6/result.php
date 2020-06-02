<?php
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['a'] . ' ' . $x2 . ' = ';

switch ($_GET['a']) 
{
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
        case '*':
        $result = $x1 * $x2;
        break;
        case '/':
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}
?>
<html>
<head>
<meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <b>Результ:</b>
    <br>
	<p><?=$expression?></>
    <?= $result ?>
</body>
</html>


