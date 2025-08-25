<?php
$num1 = $_POST["num1"] ?? null;
$num2 = $_POST["num2"] ?? null;

echo "Your first number is: $num1" . "<br>" . "Your second number is: $num2" . "<br>";
$additionSum = $num1 + $num2;
echo "Summen av $num1 + $num2 er $additionSum <br>";
$difference = $num1 - $num2;
echo "Differansen av dine to tall er $difference <br>";
$product = $num1 * $num2;
$kvotient = $num1 / $num2;
echo "Produktet til tallene dine er $product <br>" . "Kvotienten til tallene dine er $kvotient";