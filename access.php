<?php session_start();
$username = $_POST["email"];
$password = $_POST['password'];
//echo($password);
//echo($username+"efwef"+$username);
$d=pg_connect('host=localhost port=5432 dbname=HW_4 user=postgres password=123') or die('failed');

    $query = "SELECT password FROM users WHERE username = '$username';";
    $result = pg_query($d, $query); 
    $rows = pg_fetch_row($result);
    $foo = "qoobar";
    //echo "foo - $username $password "."\n";//$rows[0]
    //echo $_POST["email"];//$rows[0]
    if($rows[0] != md5($password)) {
        $error = "Invalid Email or Password, please, try again";
//        echo('Success!'+"$rows"+" "+$username);
        echo($error);
    } else {
        message: '<div>Welcome to our website, ' + $username + '</div>';
        echo('Success!');
        if(!isset($_SESSION['logged'])) {
            $_SESSION['logged'] = $username;
        }
//        echo($password);
    }
    pg_close($d); 


?>