<?php
//  2. C помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
// 0 – ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.

/* Решение */
// Построим цикл do…while с вложенным ветвлением if..else

function count ($number) {
    if (is_numeric($number)) {
        $output = '';
        do {
            if ($number === 0) {
                $output .= "{$number} - ноль.";
            } elseif (($number & 1) === 0 ) {
                // моя альтернативная запись echo
                echo "{$number} - четное число.";
                $output .= "{$number} - четное число.";
            } else {
                echo "{$number} - нечетное число.";
                $output .= "{$number} - четное число.";
            }
            $output .= "<br><hr>";
            $number++;
        } while ($number <= 10);
    }
}

count(0);
