<?php

session_start();

$usuario_autenticado = false;

$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '1234'),
    array('email' => 'user@teste.com.br', 'senha' => '1234'),
);

foreach ($usuarios_app as $user) {


    if ($user['email'] == $_POST['email'] &&  $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    echo 'Usuario autenticado';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
