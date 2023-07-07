<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'my_quiz_app');

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
if (!$conn) {
    echo "Erro Connecting to MySQL Database" . mysqli_connect_errno() . "<br>";
    exit();
}
