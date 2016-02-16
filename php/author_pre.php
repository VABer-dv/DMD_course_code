<?php 
$name = $_POST['name'];

$d = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123") or die('failed');

$query = "SELECT distinct id, name FROM project.author where name = '$name' ";

$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
if ($result) {
    $rows_num = pg_num_rows($result);
    if ($rows_num > 10) {$last = 10;}
    else {$last = $rows_num;}
    echo "<div class=\"modal-body\">";
    echo "<label class='sub-header'>$rows_num record(s) will be changed</label>";
    echo "<div>";
    echo "<table class='table table-striped'>\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "\t\t<th>Author ID</th>\n";
    echo "\t\t<th>Author Name</th>\n";
    echo "</<tr>\n";
    echo "</<thead>\n";
    echo "<tbody>\n";
    for ($j = 0; $j < $last; $j++){
    $line = pg_fetch_array($result, $j, PGSQL_ASSOC);
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td width='100'>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    if ($last<$rows_num){
        $line = pg_fetch_array($result, 0, PGSQL_ASSOC);
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td width='100'>* * *</td>\n";
        }
        echo "\t</tr>\n";
    
    }
    echo "</tbody>\n";
    echo "</table>\n";   
  } 
else {
      echo "Wrong input";
  }
pg_close($d); 

?>

