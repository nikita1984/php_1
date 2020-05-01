<?php
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций (
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

/** Решение */
// Объявим переменные и присвоим им целочисленные значения от -50 до 50
$a = mt_rand(-50, 50);
$b = mt_rand(-50, 50);

echo "Переменные \$a = {$a}, \$b = {$b}";
echo "<br>";

// Скопируем функции из пункта 3
function summ($arg1, $arg2) {
    return ($arg1 + $arg2);
    }


function difference($arg1, $arg2) {
    return ($arg1 - $arg2);
}

function multiplication($arg1, $arg2) {
    return ($arg1 * $arg2);
}

function division($arg1, $arg2) {
    if ($arg2 === 0) {
        return 'На ноль делить нельзя';
    } else { 
        return ($arg1 / $arg2);
    }
}

// Объявим функцию mathOperation
function mathOperation($arg1, $arg2, $operation) {
    return $operation($arg1, $arg2);
}

// Протестируем результат
echo 'Результат математической операции сложения: ' . mathOperation($a, $b, 'summ');
echo "<br>";

echo 'Результат математической операции вычитания: ' . mathOperation($a, $b, 'difference');
echo "<br>";

echo 'Результат математической операции умножения: ' . mathOperation($a, $b, 'multiplication');
echo "<br>";

echo 'Результат математической операции деления: ' . mathOperation($a, $b, 'division');