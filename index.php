<?php

//phpinfo();

$pdo = new PDO("pgsql:host=postgres;dbname=symfony;port=5432", 'root', '123456');

print_r($pdo);