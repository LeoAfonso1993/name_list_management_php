<?php
session_start();

$name = filter_input(INPUT_POST, 'name');

if($name){
    $list = file_get_contents('names.txt');
    $list .= "\n - {$name}";
    file_put_contents('names.txt', $list);

    header('Location: index.php');
} else {
    $_SESSION['warning'] = 'Digita um nome ae mano';
    header('Location: index.php');
}


?>