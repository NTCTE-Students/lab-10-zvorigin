<?php
class DivisionByZeroException extends Exception {}

function divide($a, $b) {
    if ($b == 0) {
        throw new DivisionByZeroException("Ошибка: деление на ноль.");
    }
    return $a / $b;
}
?>
