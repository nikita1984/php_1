<?php
function summ(int $arg1, int $arg2) {
    return ($arg1 + $arg2);
}


function difference(int $arg1, int $arg2) {
    return ($arg1 - $arg2);
}

function multiplication(int $arg1, int $arg2) {
    return ($arg1 * $arg2);
}

function division(int $arg1, int $arg2) {
    if ($arg2 === 0) {
        return 'На ноль делить нельзя';
    } else { 
        return ($arg1 / $arg2);
    }
}

// Объявим функцию mathOperation
function mathOperation(int $arg1, int $arg2, string $operation) {
    return $operation($arg1, $arg2);
}
