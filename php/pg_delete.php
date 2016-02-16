<?php 
$title = $_POST['title'];
$year = $_POST['year'];
$publisher = $_POST['publisher'];



$d = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('failed');


$query = "SELECT id from project.publisher where name = '$publisher'";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
$publ_id = @pg_fetch_result($result, 0, 0);

if ($publ_id == 0 and $publisher <> "") {$publ_id = -1;}
if ($publ_id !=0){
    $query = "SELECT distinct publication.id, title, year, publisher FROM project.publication, project.publisher where project.publication.publisher = project.publisher.id and $title and $year and publisher = '$publ_id' ";

}
else {    
    $query = "SELECT distinct publication.id, title, year, publisher FROM project.publication, project.publisher where project.publication.publisher = project.publisher.id and $title and $year and publisher > 0 ";
    
}
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

if ($result) {
    $rows_num = pg_num_rows($result);
    for ($j = 0; $j < $rows_num; $j++){
        $line = pg_fetch_array($result, $j, PGSQL_ASSOC);  
        $query = "DELETE FROM project.publication where id = $line[id]";
        $result1 = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
    }
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

