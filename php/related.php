<?php
$page = $_POST["page"];
$fil_id = $_POST["fil_id"];
$fil_title = $_POST["fil_title"];
$fil_year = $_POST["fil_year"];
$fil_publisher = $_POST["fil_publisher"];
$flag = $_POST["flag"];

$dbconn = pg_connect("host=localhost port=5432 dbname=dmd user=postgres password=123")
    or die('Could not connect: ' . pg_last_error());

if ($fil_id==""){
    $f_id = " >0";
}
else {
    $f_id= " =".$fil_id;
}

if ($fil_title==""){
    $f_title = " != ''";
}
else {
    $f_title= "LIKE'".$fil_title."%'";
}

if ($fil_year==""){
    $f_year = " >0";
}
else {
    $f_year= " =".$fil_year;
}

if ($fil_publisher==""){
    $f_publisher = " != ''";
}
else {
    $f_publisher= "LIKE'".$fil_publisher."%'";
}

$records_per_page = 15;
$num_pages = 5;
$button_per_page = 5;
$offset = ($page-1)*$records_per_page;

$query = "SELECT publication.id, title, year, publisher.name 
FROM project.research_area, project.publication, project.publisher, project.thesaurus, project.thesaurus_of_publication
where project.thesaurus_of_publication.publication = project.publication.id and project.thesaurus_of_publication.thesaurus = project.thesaurus.id 
and project.publication.publisher = project.publisher.id and res_area = research_area.id
and word in 
(SELECT word from project.publication, project.thesaurus, project.thesaurus_of_publication
where project.thesaurus_of_publication.publication = project.publication.id and project.thesaurus_of_publication.thesaurus = project.thesaurus.id 
and project.publication.id $f_id) 
and research_area.name in 
(SELECT project.research_area.name FROM project.research_area, project.publication where res_area = research_area.id and publication.id $f_id) limit $records_per_page offset $offset;";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

$query_2 = "SELECT count(*) FROM project.research_area, project.publication, project.publisher, project.thesaurus, project.thesaurus_of_publication
where project.thesaurus_of_publication.publication = project.publication.id and project.thesaurus_of_publication.thesaurus = project.thesaurus.id 
and project.publication.publisher = project.publisher.id and res_area = research_area.id
and word in 
(SELECT word from project.publication, project.thesaurus, project.thesaurus_of_publication
where project.thesaurus_of_publication.publication = project.publication.id and project.thesaurus_of_publication.thesaurus = project.thesaurus.id 
and project.publication.id  $f_id) 
and research_area.name in 
(SELECT project.research_area.name FROM project.research_area, project.publication where res_area = research_area.id and publication.id  $f_id)"; 
$result_2 = pg_query($query_2) or die('Ошибка запроса: ' . pg_last_error());
$line = pg_fetch_array($result_2, null, PGSQL_ASSOC);
$rows_num = $line[count];


if ($flag!=1){
    echo "<h2 class='sub-header'>Releted articles</h2>";
    if ($rows_num == 0) {
        echo "<h5 class='sub-header'>There are no related articles</h5>";
    }
    else{
        echo "<h5 class='sub-header'>There are $rows_num related articles</h5>";
    }
    echo "<h5 class='sub-header'><i>Click on record to show related articles</i></h5>";
    echo "<table class='table table-striped' style=\"margin-bottom: 0px\";>\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "\t\t<th style = \"width: 15%;\">Publication ID</th>\n";
    echo "\t\t<th style = \"width: 45%;\">Title</th>\n";
    echo "\t\t<th style = \"width: 10%;\">Year</th>\n";
    echo "\t\t<th style = \"width: 30%;\">Publisher</th>\n";
    echo "</<tr>\n";
    echo "</<thead>\n";
    echo "<tbody>\n";
    echo "</table>\n";
}


echo "<div id=\"tabl-body\">";
echo "<table class='table table-striped' style=\"margin: auto;\" id=\"tabl-publications\">\n";
echo "<thead style=\"height: 0; visibility:  hidden;\">\n";
echo "<tr style=\"line-height: 0; visibility:  hidden;\">\n";
echo "\t\t<th style = \"width: 15%;\"></th>\n";
echo "\t\t<th style = \"width: 45%;\"></th>\n";
echo "\t\t<th style = \"width: 10%;\"></th>\n";
echo "\t\t<th style = \"width: 30%;\"></th>\n";
echo "</<thead>\n";
echo "<tbody>\n";

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td >$col_value</td>\n";
    }
    echo "\t</tr>\n";
}

echo "</tbody>\n";
echo "</table>\n";

echo "<form class=\"form-inline\">";
echo "<div  style = \"margin: auto; margin-top: 20px;\"> \n";

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

echo "<input class=\"form-control\" type=\"number\" min=\"1\" max=\"$last\" placeholder=\"Page\" style = \"width: 80px;\" id = \"inp_page\">\n";

echo "<a class=\"btn btn-primary btn-sm go\" id=\"goo\">\n";
echo "<span class=\"glyphicon \">GO</span></a>\n";
echo "<div class=\"pull-right\">";

echo "</form> \n";
echo "</div> \n";
echo "</div> \n";



pg_free_result($result);
pg_close($dbconn);
?>