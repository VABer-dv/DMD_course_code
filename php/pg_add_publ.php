<?php 
$title = $_POST['title'];
$year = $_POST['year'];
$publisher = $_POST['publisher'];
$d = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('failed');
$query = "SELECT id from project.publisher where name = '$publisher'";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
$publ_id = @pg_fetch_result($result, 0, 0);
if ($publ_id !=0){
    $query = "INSERT INTO project.publication VALUES (DEFAULT, '$title', $year, $publ_id)";  
}
else {
    
    $query = "INSERT INTO project.publisher VALUES (DEFAULT, '$publisher')";
    $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
    $query = "SELECT id from project.publisher where name = '$publisher'";
    $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
    $publ_id = pg_fetch_result($result, 0, 0);
    $query = "INSERT INTO project.publication VALUES (DEFAULT, '$title', $year, $publ_id)";  
}
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