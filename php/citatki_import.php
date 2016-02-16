<?php
$page = $_POST["page"];
$fil_pub = $_POST["fil_pub"];
$fil_kw = $_POST["fil_kw"];
$flag = $_POST["flag"];

$dbconn = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123")
    or die('Could not connect: ' . pg_last_error());

if ($fil_pub==""){
    $f_pub = " != ''";
}
else {
    $f_pub= "LIKE'".$fil_pub."%'";
}

if ($fil_kw==""){
    $f_kw = " != ''";
}
else {
    $f_kw= "LIKE '%".$fil_kw."%'";
}

$records_per_page = 50;
$num_pages = 5;
$button_per_page = 5;
$offset = ($page-1)*$records_per_page;



$query = "SELECT title, word from project.publication, project.thesaurus, project.thesaurus_of_publication
where project.thesaurus_of_publication.publication = project.publication.id and project.thesaurus_of_publication.thesaurus = project.thesaurus.id and title $f_pub and word $f_kw limit $records_per_page offset $offset;";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

$query_2 = "SELECT count(*) from project.publication, project.thesaurus, project.thesaurus_of_publication
where project.thesaurus_of_publication.publication = project.publication.id and project.thesaurus_of_publication.thesaurus = project.thesaurus.id and title $f_pub and word $f_kw"; 
$result_2 = pg_query($query_2) or die('Ошибка запроса: ' . pg_last_error());
$line = pg_fetch_array($result_2, null, PGSQL_ASSOC);
$rows_num = $line[count];

if ($flag!=1){
    echo "<h2 class='sub-header' style = \"text-align: center;\">Author table</h2>";
    echo "<table class='table table-striped' style=\"width: 80%; margin: auto;\">\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "\t\t<th style=\"width: 40%;\>Publication</th>\n";
    echo "\t\t<th style=\"width: 60%;\>Key word</th>\n";
    echo "</<tr>\n";
    echo "</<thead>\n";
    echo "<tr class=\"filters\">
    <td><input type=\"text\" class=\"form-control filter\" placeholder=\"Publication\" value=\"$fil_pub\" id=\"fil_pub\"></td>
    <td><input type=\"text\" class=\"form-control filter\" placeholder=\"Key word\" value=\"$fil_kw\"  id=\"fil_kw\"></td>
    </tr>";
    
    echo "</tbody>\n";
    echo "</table>\n";
}

echo "<div id=\"tabl-body\">";
echo "<table class='table table-striped' style=\"width: 80%; margin: auto;\">\n";
echo "<thead style=\"height: 0; visibility:  hidden;\">\n";
echo "<tr style=\"line-height: 0; visibility:  hidden;\">\n";
echo "\t\t<th style = \"width: 40%;\"></th>\n";
echo "\t\t<th style = \"width: 60%;\"></th>\n";
echo "</<thead>\n";
echo "<tbody>\n";

echo "\t<tr>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    
//    foreach ($line as $col_value) {
    if ($title != $line[title]) {
            if ($title != null){
                echo "\t\t<td width='100'>$str</td>\n";
                echo "\t</tr>\n";
                echo "\t<tr>\n";
            }
            echo "\t\t<td width='100'>$line[title]</td>\n";
            $str = $line[word];

            $title = $line[title];
            
    }
    else {
        $str .= ", "; 
        $str .= $line[word];                   
    }
    
    
}
echo "\t\t<td width='100'>$str</td>\n";
echo "\t</tr>\n";
echo "\t<tr>\n";

echo "</tbody>\n";
echo "</table>\n";
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
if ($final>1){
    for ($j = $start; $j <= $final; $j++) {
        
        if ($j == $page){
            echo "<a class=\"btn btn-default btn-sm page\">\n";           
        } else{
            echo "<a class=\"btn btn-primary btn-sm page\">\n";
        }
        echo "<span class=\"glyphicon \">$j</span></a>\n"; 
    }
}

if ($final != $last){
echo "<a class=\"btn btn-primary btn-sm \" id=\"last\">\n";
echo "<span class=\"glyphicon \">...</span></a>\n";

echo "<a class=\"btn btn-primary btn-sm page\" id=\"last\">\n";
echo "<span class=\"glyphicon \">$last</span></a>\n";
}

echo "<input class=\"custom_class\" type=\"number\" min=\"1\" max=\"$last\" placeholder=\"Page\" style = \"width: 80px;\" id = \"inp_page\">\n";

echo "<a class=\"btn btn-primary btn-sm go\" id=\"goo\">\n";
echo "<span class=\"glyphicon \">GO</span></a>\n";

echo "</form> \n";
echo "</div> \n";
echo "</div> \n";

pg_free_result($result);
pg_close($dbconn);

?>