<?php 
$name = $_POST['name'];


$d = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('failed');

$query = "DELETE FROM project.author where name = '$name'";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

if ($result) {
    echo "<div class=\"modal-body\">";
    echo "<label class='sub-header'>All records were successfully deleted</label>";
    echo "<div>";
} 
else {
    echo "<div class=\"modal-body\">";
    echo "Wrong input";
    echo "<div>";
  }
pg_close($d); 

?>

