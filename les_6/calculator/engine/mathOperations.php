<?php
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
