<?php
try {
    $conn = mysqli_connect('localhost','root','','borusan') or die('connection failed');

    $DBConnection = new PDO("mysql:host=localhost;dbname=borusan;charset=utf8;",'root','');

    //echo 'DB Conn 200';
}catch(PDOException $e){
    echo $e->getMessage();
}