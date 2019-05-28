<?php
    define('MYSQL_SERVER', 'localhost:3306');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB', 'zoo');

    function db_conneсt(){
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: " . mysqli_error($link));
        if(!mysqli_set_charset($link, "utf8")){
            printf("Error" . mysqli_error($link));
        }

        return $link;
    }
?>