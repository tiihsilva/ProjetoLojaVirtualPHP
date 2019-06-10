<?php

$senha = "tiago123";
$senhaC = password_hash($senha, PASSWORD_DEFAULT);
var_dump(password_verify("123", $senhaC));