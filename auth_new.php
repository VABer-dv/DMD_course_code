<?php 
$username = $_POST['email'];
$password = $_POST['password_new'];
$password_conf = $_POST['password_new_2'];
$d=pg_connect('host=localhost port=5432 dbname=HW_4 user=postgres password=123') or die('failed');
if($password1 === $password2) {
    $query = "SELECT * FROM users WHERE username LIKE '$username';";
    $result = pg_query($d, $query); 
    $rows = pg_num_rows($result);
    if($rows != 0) {
        $error = "busy";
        //echo("<script> alert (\"You cannot use this login to register\") </script>\n");
        
    } else {
        $query2 ="INSERT INTO users (\"id\", \"username\", \"password\") VALUES (DEFAULT,'$username', md5('$password'));";
        $result2 = pg_query($d, $query2);
        echo('Success!');
    }
    pg_close($d); 
} else {
    echo('Password and its confirmation should match!');
}
?>