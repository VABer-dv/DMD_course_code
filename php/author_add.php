<?php 
$name = $_POST['name'];
$d = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('failed');
$query = "INSERT INTO project.author VALUES (DEFAULT, '$name')";  
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
if ($result) {
    echo "<div class=\"modal-body\">";
    echo "<label class='sub-header'>Record was successfully added</label>";
    echo "<div>";
  } else {
    echo "<div class=\"modal-body\">";
    echo "<label class='sub-header'>Wrong input</label>";
    echo "<div>";
  }
pg_close($d); 

?>