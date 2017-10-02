<?php

$key = '123456789:aukcxdJBVYUJmv';

$db = new Samu_Database($key);

$info = $db->getUserInfo('Nen3one');

$nome = $info['first_name'];

$id = $info['user_id'];

echo 'ID: ' . $id . ', Nome: ' . $nome;





 ?>
