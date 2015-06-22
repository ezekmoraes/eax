<?php

$msg = "Nome: " . $_POST['nome']  . "\n Idade: " . $_POST['idade'] . "\n País: " . $_POST['pais'] . "\n";

$handler = fopen('data.txt', 'a+');
fwrite($handler, $msg);
fclose($handler);