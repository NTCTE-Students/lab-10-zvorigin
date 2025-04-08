<?php
function logError(Exception $exception) {
    file_put_contents('error.log', date('Y-m-d H:i:s') . ' - ' . $exception->getMessage() . "\n", FILE_APPEND);
}
?>