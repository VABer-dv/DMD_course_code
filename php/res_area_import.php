<?php
$page = $_POST["page"];
$fil_id = $_POST["fil_id"];
$fil_title = $_POST["fil_title"];
$fil_area = $_POST["fil_area"];
$flag = $_POST["flag"];

$dbconn = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123")
    or die('Could not connect: ' . pg_last_error());

if ($fil_id==""){
    $f_id = " >0";
}
else {
    $f_id = " =".$fil_id;
}

if ($fil_title==""){
    $f_title = " != ''";
}
else {
    $f_title = "LIKE'".$fil_title."%'";
}

if ($fil_area==""){
    $f_area = " != ''";
}
else {
    $f_area = "LIKE'".$fil_area."%'";
}

$records_per_page = 15;
$num_pages = 5;
$button_per_page = 5;
$offset = ($page-1)*$records_per_page;

$query = "SELECT publication.id, title, project.research_area.name FROM project.research_area, project.publication where res_area = research_area.id and publication.id $f_id and title $f_title and project.research_area.name $f_area limit $records_per_page offset $offset;";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

$query_2 = "SELECT count(*) FROM project.research_area, project.publication where res_area = research_area.id and publication.id $f_id and title $f_title and project.research_area.name $f_area"; 
$result_2 = pg_query($query_2) or die('Ошибка запроса: ' . pg_last_error());
$line = pg_fetch_array($result_2, null, PGSQL_ASSOC);
$rows_num = $line[count];

if ($flag!=1){
    echo "<h2 class='sub-header' style = \"text-align: center;\">Research area table</h2>";
    echo "<table class='table table-striped' style=\"width: 80%; margin: auto;\">\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "\t\t<th style=\"width: 15%;\">Publication ID</th>\n";
    echo "\t\t<th style=\"width: 45%;\">Publication</th>\n";
    echo "\t\t<th style=\"width: 40%;\">Research area</th>\n";
    echo "</<tr>\n";
    echo "</<thead>\n";
    echo "<tr class=\"filters\">
    <td><input type=\"text\" class=\"form-control\" placeholder=\"#\" value=\"$fil_id\" id=\"fil_id\"></td>
    <td><input type=\"text\" class=\"form-control\" placeholder=\"Title\" value=\"$fil_title\"  id=\"fil_title\"></td>
    <td><input type=\"text\" class=\"form-control\" placeholder=\"Research area\" value=\"$fil_area\" id=\"fil_area\"></td>
    </tr>";

    echo "</table>\n";
}

echo "<div id=\"tabl-body\" >";
echo "<table class='table table-striped' style=\"width: 80%; margin: auto;\">\n";
echo "<thead style=\"height: 0; visibility:  hidden;\">\n";
echo "<tr style=\"line-height: 0; visibility:  hidden;\">\n";
echo "\t\t<th style = \"width: 15%;\"></th>\n";
echo "\t\t<th style = \"width: 45%;\"></th>\n";
echo "\t\t<th style = \"width: 40%;\"></th>\n";
echo "</<thead>\n";
echo "<tbody>\n";

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td width='100'>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}

echo "</tbody>\n";
echo "</table>\n";

echo "<form class=\"form-inline\">";
echo "<div  style = \"width: 80%; margin: auto; margin-top: 20px;\"> \n";

$button_pages = $rows_num / $records_per_page;
if ($button_pages>$button_per_page)
    {
        $button_pages=$button_per_page;
    }

$start = $page;
if ($start - 2 <= 0) {$start = 1;} else {$start = $start -2;}
if ($page == 1){
            echo "<a class=\"btn btn-default btn-sm page\">\n";           
        } else{
            echo "<a class=\"btn btn-primary btn-sm page\">\n";
        }
echo "<span class=\"glyphicon \">1</span></a>\n"; 

if ($start>2) {
    echo "<a class=\"btn btn-primary btn-sm \" id=\"last\">\n";
    echo "<span class=\"glyphicon \">...</span></a>\n";
} else{
    $start = 2;
}

$last = ceil($rows_num / $records_per_page);
$final = $button_pages+$start;
if ($final > $last) { $final = $last;}
if ($start>$final-$button_per_page){$start = $last - $button_per_page;}
if ($start<1){$start=2;}
    for ($j = $start; $j <= $final; $j++) {
    if ($j == $page){
            echo "<a class=\"btn btn-default btn-sm page\">\n";           
        } else{
            echo "<a class=\"btn btn-primary btn-sm page\">\n";
        }
        echo "<span class=\"glyphicon \">$j</span></a>\n"; 
}

if ($final != $last){
echo "<a class=\"btn btn-primary btn-sm \" id=\"last\">\n";
echo "<span class=\"glyphicon \">...</span></a>\n";


echo "<a class=\"btn btn-primary btn-sm page\" id=\"last\">\n";
echo "<span class=\"glyphicon \">$last</span></a>\n";
}

echo "<input class=\"form-control\" type=\"number\" min=\"1\" max=\"$last\" placeholder=\"Page\" style = \"width: 80px;\" id = \"inp_page\">\n";

echo "<a class=\"btn btn-primary btn-sm go\" id=\"goo\">\n";
echo "<span class=\"glyphicon \">GO</span></a>\n";
echo "<div class=\"pull-right\">";

echo "</form> \n";
echo "</div> \n";
echo "</div> \n";



// Очистка результата
pg_free_result($result);

// Закрытие соединения
pg_close($dbconn);

?>