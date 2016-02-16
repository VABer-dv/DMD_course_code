<?php 
$name = $_POST['name'];


$d = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('failed');

$query = "SELECT count(*) FROM project.research_area, project.publication where publisher = research_area.id and research_area.name = '$name';";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
$line = pg_fetch_array($result, null, PGSQL_ASSOC);
if ($line[count] != 0){
    echo "There are " , print_r($line[count]) , " record(s) with such research area";
}
else{
    $query = "DELETE FROM project.research_area where name = '$name'";
    $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

    if ($result) {
        echo "<div class=\"modal-body\">";
        echo "<label class='sub-header'>All records were successfully deleted</label>";
        echo "<div>";
    } 

}
pg_close($d); 

?>

