<?php
session_start();


if($_SESSION['warning']){
    echo $_SESSION['warning'];
    $_SESSION['warning'] = '';
}

?>

<form method="POST" action="reciever.php">
    <label>Name: 
        <input type="text" name="name"></input>
    </label>
    <input type="submit" value="add"></input>
</form>

<h1>List</h1>
<hr/>

<?php

$namesList = file_get_contents('names.txt');
echo nl2br($namesList); //tried to use explode before, but explode returns an array everytime, this way it displays exactly what I want since my text file already have the line breakers

?>