<?php
include 'calculate.php';

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operation=$_POST['operation'];

$calculate = new Calculate($num1, $num2, $operation);

$response = $calculate->calculate();
