<?php


        $host = 'localhost'; 
        $database = 'crud';
        $user = 'root'; 
        $password = 'root'; 
        
        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    ?> 