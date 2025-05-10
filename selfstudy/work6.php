<?php
class ShopException extends Exception {}

class InsufficientFundsException extends ShopException {}
class ProductNotFoundException extends ShopException {}
?>
