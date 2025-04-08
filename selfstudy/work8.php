<?php
class ShortPasswordException extends ValidationException {}
class EmptyFieldException extends ValidationException {}

function validateRegistrationForm($data) {
    if (empty($data['email'])) {
        throw new EmptyFieldException("Поле email обязательно для заполнения.");
    }
    if (strlen($data['password']) < 6) {
        throw new ShortPasswordException("Пароль должен содержать минимум 6 символов.");
    }
    validateEmail($data['email']);
}
?>