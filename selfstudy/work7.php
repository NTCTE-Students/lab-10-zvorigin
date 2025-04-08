<?php
try {
    // Пример использования
} catch (ValidationException | FileReadException | DivisionByZeroException | DatabaseConnectionException $e) {
    logError($e);
    echo $e->getMessage();
}
?>