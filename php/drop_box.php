<?php
$page = $_POST["page"];
    $db = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('Could not connect: ' . pg_last_error());
    $query = "SELECT * FROM project.research_area";
    $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        if ($line[name] != $page){
        echo "<li onclick=\"dropdown(this.innerHTML);\">",print_r($line[name], true),"</li>";
        }
    }
    pg_close($db);
?>