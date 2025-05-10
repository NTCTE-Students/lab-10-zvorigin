<?php
class ValidationException extends Exception {}

function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new ValidationException("Неверный формат email: " . $email);
    }
}
?>
