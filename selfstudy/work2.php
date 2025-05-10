<?php
class FileReadException extends Exception {}

function readFileContent($filename) {
    if (!file_exists($filename)) {
        throw new FileReadException("Файл не найден: " . $filename);
    }
    return file_get_contents($filename);
}
?>