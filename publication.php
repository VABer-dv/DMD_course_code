<?php session_start();
if(isset($_SESSION['logged'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Publication msnsgment system</title>

        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css" rel="stylesheet">
        <link href="css/circle.css" rel="stylesheet">
        <link rel="stylesheet" href="css/nivo-slider.css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/loading.css">
        <link rel="stylesheet" type="text/css" href="css/loading-2.css">
    </head>

    <body>
        <?php include("php/menu.php")?>

        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">

                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="/publication.php">Publications</a></li>
                        <li><a href="/author.php">Author</a></li>
                        <li><a href="/res_area.php">Research Area</a></li>
                        <li><a href="/citatki.php">Citations</a></li>
                    </ul>

                </div>
                <div class="col-sm-9 col-md-10 main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="visible-xs">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                </p>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="secHeader">
                                                    <h1 class="text-center">Computer science bibliography</h1>                                   
                                                </div>
                                                <div class="row">
<!---------------------------------------- Show Button ---------------------------------------->   
                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="blok text-center">
                                                            <div class="hexagon-a">
                                                                <a class="hlinktop" href="#">
                                                                    <div class="hexa-a" id="show">
                                                                        <div class="hcontainer-a">
                                                                            <div class="vertical-align-a">
                                                                                <span class="texts-a"><i class="fa fa-th-list"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="hexagon">
                                                                <a class="hlinkbott" href="#">
                                                                    <div class="hexa">
                                                                        <div class="hcontainer">
                                                                            <div class="vertical-align">
                                                                                <span class="texts"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <h4>Show records</h4>

                                                        </div>
                                                    </div>
<!---------------------------------------- Add Button ----------------------------------------> 
                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="blok text-center">
                                                            <div class="hexagon-a" data-toggle="modal" data-target="#myModal_add">
                                                                <a class="hlinktop" href="#">
                                                                    <div class="hexa-a">
                                                                        <div class="hcontainer-a">
                                                                            <div class="vertical-align-a">
                                                                                <span class="texts-a"><i class="fa fa-edit dashboard-div-icon"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="hexagon">
                                                                <a class="hlinkbott" href="#">
                                                                    <div class="hexa">
                                                                        <div class="hcontainer">
                                                                            <div class="vertical-align">
                                                                                <span class="texts"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <h4>Add records</h4>
                                                        </div>
                                                    </div>
<!---------------------------------------- Update Button ----------------------------------------> 
                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="blok text-center">
                                                            <div class="hexagon-a" data-toggle="modal" data-target="#myModal_up">
                                                                <a class="hlinktop">
                                                                    <div class="hexa-a">
                                                                        <div class="hcontainer-a">
                                                                            <div class="vertical-align-a">
                                                                                <span class="texts-a"><i class="fa fa-cogs dashboard-div-icon"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="hexagon">
                                                                <a class="hlinkbott" href="#">
                                                                    <div class="hexa">
                                                                        <div class="hcontainer">
                                                                            <div class="vertical-align">
                                                                                <span class="texts"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <h4>Update records</h4>

                                                        </div>
                                                    </div>
<!---------------------------------------- Delete Button ---------------------------------------->                                                   
                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="blok text-center">
                                                            <div class="hexagon-a" data-toggle="modal" data-target="#myModal_del">
                                                                <a class="hlinktop">
                                                                    <div class="hexa-a">
                                                                        <div class="hcontainer-a">
                                                                            <div class="vertical-align-a">
                                                                                <span class="texts-a"><i class="fa fa-times"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="hexagon">
                                                                <a class="hlinkbott" href="#">
                                                                    <div class="hexa">
                                                                        <div class="hcontainer">
                                                                            <div class="vertical-align">
                                                                                <span class="texts"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <h4>Delete records</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                
                                        </div>
                                        <div class="container" id="loader" style="display:none;">
                                            <div class="content">
                                            <div class="circle"></div>
                                            <div class="circle1"></div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>

<!---------------------------------------- Modal Add ---------------------------------------->
                    <div class="modal fade " id="myModal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add new record to the "Publications" table </h4>
                                </div>
                                <div class="modal-body">
                                    <label for="publ-title" class="control-label">Title:</label>
                                    <input type="text" class="form-control" id="publ-title">
                                    <label for="publ-year" class="control-label">Year:</label>
                                    <input type="text" class="form-control" id="publ-year">
                                    <label for="publ-publisher" class="control-label">Publisher:</label>
                                    <input type="text" class="form-control" id="publ-publisher">

                                </div>
                                <div id="table-show">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success" id="publ-add">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!---------------------------------------- Modal Update ---------------------------------------->
                    <div class="modal fade " id="myModal_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Update record(s) in the "Publications" table </h4>
                                </div>
                                <div class="modal-body">
                                    <label>
                                    <u>Fill at least one column</u>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="publ-title" class="control-label">Title:</label>
                                            <input type="text" class="form-control" id="publ-title-up">
                                            <label for="publ-year" class="control-label">Year:</label>
                                            <input type="text" class="form-control" id="publ-year-up">
                                            <label for="publ-publisher" class="control-label">Publisher:</label>
                                            <input type="text" class="form-control" id="publ-publisher-up">
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <label for="publ-title-new" class="control-label">New Title:</label>
                                            <input type="text" class="form-control" id="publ-title-new">
                                            <label for="publ-year-new" class="control-label">New Year:</label>
                                            <input type="text" class="form-control" id="publ-year-new">
                                            <label for="publ-publisher-new" class="control-label">New Publisher:</label>
                                            <input type="text" class="form-control" id="publ-publisher-new">
                                        </div>
                                    </div>
                                </div>
                                                              
                                <div id="table-up">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-warning" id="publ-up">Preview</button>
                                    <button type="button" class="btn btn-warning" id="publ-up-fin" style="display:none;">Update</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

<!---------------------------------------- Modal Delete ---------------------------------------->
                    <div class="modal fade " id="myModal_del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Delete record(s) from the "Publications" table </h4>
                                </div>
                                <div class="modal-body">
                                    <label>
                                    <u>Fill at least one column</u>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="publ-title" class="control-label">Title:</label>
                                            <input type="text" class="form-control" id="publ-title-del">
                                            <label for="publ-year" class="control-label">Year:</label>
                                            <input type="text" class="form-control" id="publ-year-del">
                                            <label for="publ-publisher" class="control-label">Publisher:</label>
                                            <input type="text" class="form-control" id="publ-publisher-del">
                                        </div>
                                    </div>

                                </div>
                                
                                <div id="table-rel">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" id="publ-del">Preview</button>
                                    <button type="button" class="btn btn-danger" id="publ-del-fin" style="display:none;">Delete</button>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
<!-------------------------------------- Modal Related -------------------------------------->
                    <div class="modal fade " id="myModal_rel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Related articles</h4>
                                </div>
                                <div class="modal-body">
                                
                                <div class="container" id="loader_rel" style="display:none; margin: auto;" >
                                
                                    <div class="wrapper">
                                        <div class="line"></div>
                                        <div class="circle_2">
                                            see
                                        </div>
                                        <div class="circle_1">
                                            Loading...
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="table-related">
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
<!---------------------------------------- Modal End ---------------------------------------->
<!------------------------------------ Show result table ------------------------------------>
                    <div id="publ-table">
                    </div>
                    </div>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/scripts.js"></script>

<!------------------------------------ Add Record Script ------------------------------------>
                    <script>
                        $("#publ-add").click(function () {
                            var title = $('#publ-title').val();
                            var year = $('#publ-year').val();
                            var publisher = $('#publ-publisher').val();

                            $.ajax({
                                type: "POST",
                                url: 'php/pg_add_publ.php',
                                data: ({
                                    "title": title,
                                    "year": year,
                                    "publisher": publisher
                                }),
                                success: function (msg) {
                                    
                                    $('#table-show').hide;
                                    $('#table-show').html(msg);
                                    $('#table-show').fadeIn(500);
                                    
                                }
                            });
                        });
                    </script>

<!------------------------------------ Show Related Articles ------------------------------------>
                    <script>
                        $(document).on('click', "#tabl-publications", function (event) {
                            var table = document.getElementById("tabl-publications");
                            var rows = table.getElementsByTagName("tr");
                            for (i = 1; i < rows.length; i++) {
                                var row = table.rows[i];
                                row.onclick = function(myrow){
                                    return function() { 
                                        var cell = myrow.getElementsByTagName("td")[0];
                                        var id = cell.innerHTML;
                                        $("#myModal_rel").modal();
                                        $("#loader_rel").show();
                                        $('#table-related').hide();
                                        
                                        var fil_id = id;                   
                                        var page = 1;
                                        console.log(fil_id);
                                        console.log(page);
                                        $.ajax({
                                            type: "POST",
                                            url: 'php/related.php',
                                            data: ({
                                                "page": page,
                                                "fil_id": fil_id,
                                            }),
                                            success: function (data) { 
                                                console.log(data);
                                                $('#table-related').html(data);
                                                $('#table-related').fadeIn(500); 
                                                $("#loader_rel").hide();  
                                            }
                                        });
                                       
                                    };
                                }(row);
                            }
                        });
                    </script>
                    
<!------------------------------------ Show Records Script ------------------------------------>   
                    <script>
                        $("#show").click(function (event) {
                            $("#loader").show();
                            var page = 1;
                            $.ajax({
                                type: "POST",
                                url: "php/pg_import.php",
                                data: ({
                                    "page": page
                                }),
                                success: function (data) {
                                    $('#publ-table').hide();
                                    $('#publ-table').html(data);
                                    $('#publ-table').fadeIn(1500);
                                    $("#loader").hide();
                                }
                            });
                            $('html, body').animate({
                                scrollTop: $("#publ-table").offset().top
                            }, 1000);                           
                        });
                        
                        $(document).on('click', ".page", function (event) {
                            $('html, body').animate({
                                scrollTop: $("#publ-table").offset().top
                            }, 0)
                            $('#tabl-body').fadeOut(500);
                            $("#loader").show();                           
                            var fil_id = document.getElementById("fil_id").value;
                            var fil_title = document.getElementById("fil_title").value;
                            var fil_year = document.getElementById("fil_year").value;
                            var fil_publisher = document.getElementById("fil_publisher").value;
                            var page = $(this).text();
                            var flag = 1;

                            $.ajax({
                                type: "POST",
                                url: 'php/pg_import.php',
                                data: ({
                                    "flag": flag,
                                    "page": page,
                                    "fil_id": fil_id,
                                    "fil_title": fil_title,
                                    "fil_year": fil_year,
                                    "fil_publisher": fil_publisher
                                    
                                }),
                                success: function (data) {                                         
                                    $('#tabl-body').html(data);
                                    $('#tabl-body').fadeIn(500);
                                    $("#loader").hide();    
                                    }
                                });
                            });
                        
                            var delay = (function(){
                              var timer = 0;
                              return function(callback, ms){
                              clearTimeout (timer);
                              timer = setTimeout(callback, ms);
                             };
                            })();
                        
                            function filtering(event) {
                                delay(function(){
                                var fil_id = document.getElementById("fil_id").value;
                                var fil_title = document.getElementById("fil_title").value;
                                var fil_year = document.getElementById("fil_year").value;
                                var fil_publisher = document.getElementById("fil_publisher").value;
                                var page = 1;
                                var flag = 1;
                                                                
                                $.ajax({
                                    type: "POST",
                                    url: 'php/pg_import.php',
                                    data: ({
                                        "flag": flag,
                                        "page": page,
                                        "fil_id": fil_id,
                                        "fil_title": fil_title,
                                        "fil_year": fil_year,
                                        "fil_publisher": fil_publisher
                                    }),
                                    success: function (data) {                                      
                                        $('#tabl-body').html(data);
                                        $("#loader").hide(); 
                                    }
                                }); 
                                }, 1000 );
                            }
                        
                            $(document).on('input', '#fil_id', filtering);

                            $(document).on('input', '#fil_title', filtering);

                            $(document).on('input', '#fil_year', filtering);

                            $(document).on('input', '#fil_publisher', filtering);
                        
                            $(document).on('click', '.go', function (event) {
                                $('html, body').animate({
                                    scrollTop: $("#publ-table").offset().top
                                }, 0)
                                $("#loader").show();    
                                $('#tabl-body').fadeOut(500);
                                var page =  document.getElementById("inp_page").value;
                                var fil_id = document.getElementById("fil_id").value;
                                var fil_title = document.getElementById("fil_title").value;
                                var fil_year = document.getElementById("fil_year").value;
                                var fil_publisher = document.getElementById("fil_publisher").value;
                                var flag = 1;
                                $.ajax({
                                    type: "POST",
                                    url: 'php/pg_import.php',
                                    data: ({
                                        "flag": flag,
                                        "page": page,
                                        "fil_id": fil_id,
                                        "fil_title": fil_title,
                                        "fil_year": fil_year,
                                        "fil_publisher": fil_publisher                                
                                    }),
                                    success: function (data) {                                                                              
                                        $('#tabl-body').html(data);
                                        $('#tabl-body').fadeIn(500);
                                        $("#loader").hide();    
                                    }
                                });
                            });                      
                        
                    </script>
<!------------------------------------ Show Updated Records Script ------------------------------------>
                   <script>
                        $("#publ-up").click(function () {
                            var title = $('#publ-title-up').val();
                            var year = $('#publ-year-up').val();
                            var publisher = $('#publ-publisher-up').val();

                            if (title == '' && year == '' && publisher == ''){
                                alert ("All rows are empty, pls fill them");   
                            }
                            else{                          
                                if (title == ''){
                                    title = "title != ''"
                                }
                                else{
                                    title = "title = '"+title+"'";
                                }
                                if (year == ''){
                                    year = "year > 0"
                                }
                                else{
                                    year = "year = "+year;
                                }


                                $.ajax({
                                    type: "POST",
                                    url: 'php/pg_pre_up.php',
                                    data: ({
                                        "title": title,
                                        "year": year,
                                        "publisher": publisher
                                    }),
                                    success: function (msg) {
                                        $("#publ-up-fin").show();
                                        $('#table-up').hide;
                                        $('#table-up').html(msg);
                                        $('#table-up').fadeIn(500);
                                    }
                                });
                            }
                        });                        
                    </script> 
<!--------------------------------------  Update Records Script -------------------------------------->
                   <script>
                        $("#publ-up-fin").click(function () {
                            var title = $('#publ-title-up').val();
                            var year = $('#publ-year-up').val();
                            var publisher = $('#publ-publisher-up').val();
                            
                            var title_n = $('#publ-title-new').val();
                            var year_n = $('#publ-year-new').val();
                            var publisher_n = $('#publ-publisher-new').val();

                            if (title == '' && year == '' && publisher == ''){
                                alert ("All rows are empty, pls fill them");   
                            }
                            else{                          
                                if (title == ''){
                                    title = "title != ''"
                                }
                                else{
                                    title = "title = '"+title+"'";
                                }
                                if (year == ''){
                                    year = "year > 0"
                                }
                                else{
                                    year = "year = "+year;
                                }

                                $.ajax({
                                    type: "POST",
                                    url: 'php/pg_update.php',
                                    data: ({
                                        "title": title,
                                        "year": year,
                                        "publisher": publisher,
                                        "title_n": title_n,
                                        "year_n": year_n,
                                        "publisher_n": publisher_n
                                    }),
                                    success: function (msg) {
                                        $('#table-up').hide;
                                        $('#table-up').html(msg);
                                        $('#table-up').fadeIn(500);
                                    }
                                });
                            }
                        });                        
                    </script> 
                     
<!--------------------------------------- Hide Update Button --------------------------------------->              
                    <script>
                      document.getElementById('publ-title-del').oninput = function() {
                        $('#publ-up-fin').hide();
                        document.getElementById('publ-del-fin').style = "display:none;";
                      }
                      
                      document.getElementById('publ-year-del').oninput = function() {
                        $('#publ-up-fin').hide();
                        document.getElementById('publ-del-fin').style = "display:none;";
                      }
                      
                      document.getElementById('publ-publisher-del').oninput = function() {
                        $('#publ-up-fin').hide();
                        document.getElementById('publ-del-fin').style = "display:none;";
                      }                                            
                                            
                    </script>
<!------------------------------------ Show Records to Delete Script ------------------------------------>
                   <script>
                        $("#publ-del").click(function () {
                            var title = $('#publ-title-del').val();
                            var year = $('#publ-year-del').val();
                            var publisher = $('#publ-publisher-del').val();

                            if (title == '' && year == '' && publisher == ''){
                                alert ("All rows are empty, pls fill them");   
                            }
                            else{                          
                                if (title == ''){
                                    title = "title != ''"
                                }
                                else{
                                    title = "title = '"+title+"'";
                                }
                                if (year == ''){
                                    year = "year > 0"
                                }
                                else{
                                    year = "year = "+year;
                                }


                                $.ajax({
                                    type: "POST",
                                    url: 'php/pg_pre_up.php',
                                    data: ({
                                        "title": title,
                                        "year": year,
                                        "publisher": publisher
                                    }),
                                    success: function (msg) {
                                        $("#publ-del-fin").show();
                                        $('#table-del').hide;
                                        $('#table-del').html(msg);
                                        $('#table-del').fadeIn(500);
                                    }
                                });
                            }
                        });                        
                    </script>      
<!--------------------------------------  Delete Records Script -------------------------------------->
                   <script>
                        $("#publ-del-fin").click(function () {
                            var title = $('#publ-title-del').val();
                            var year = $('#publ-year-del').val();
                            var publisher = $('#publ-publisher-del').val();

                            if (title == '' && year == '' && publisher == ''){
                                alert ("All rows are empty, pls fill them");   
                            }
                            else{                          
                                if (title == ''){
                                    title = "title != ''"
                                }
                                else{
                                    title = "title = '"+title+"'";
                                }
                                if (year == ''){
                                    year = "year > 0"
                                }
                                else{
                                    year = "year = "+year;
                                }

                                $.ajax({
                                    type: "POST",
                                    url: 'php/pg_delete.php',
                                    data: ({
                                        "title": title,
                                        "year": year,
                                        "publisher": publisher,
                                    }),
                                    success: function (msg) {
                                        $('#table-del').hide;
                                        $('#table-del').html(msg);
                                        $('#table-del').fadeIn(500);
                                    }
                                });
                            }
                        });                        
                    </script> 
                     
<!--------------------------------------- Hide Delete Button --------------------------------------->              
                    <script>
                      document.getElementById('publ-title-del').oninput = function() {
                        $('#publ-up-fin').hide();
                        document.getElementById('publ-up-fin').style = "display:none;";
                      }
                      
                      document.getElementById('publ-year-up').oninput = function() {
                        $('#publ-up-fin').hide();
                        document.getElementById('publ-up-fin').style = "display:none;";
                      }
                      
                      document.getElementById('publ-publisher-up').oninput = function() {
                        $('#publ-up-fin').hide();
                        document.getElementById('publ-up-fin').style = "display:none;";
                      }                                            
                                            
                    </script>           
    </body>

    </html>
    <?php 
} else {
    echo("<h2>Access denied, please sign up</h2>");
}
?>