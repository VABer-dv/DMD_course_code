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
    </head>

    <body>
        <?php include("php/menu.php")?>

        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">

                    <ul class="nav nav-sidebar">
                        <li><a href="/publication.php">Publications</a></li>
                        <li class="active"><a href="/author.php">Author</a></li>
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
                                    <h4 class="modal-title" id="myModalLabel">Add new record to the "Author" table </h4>
                                </div>
                                <div class="modal-body">
                                    <label for="publ-name" class="control-label">Author name:</label>
                                    <input type="text" class="form-control" id="publ-name">
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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="publ-name" class="control-label">Author name:</label>
                                            <input type="text" class="form-control" id="publ-name-up">
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <label for="publ-name-new" class="control-label">New name:</label>
                                            <input type="text" class="form-control" id="publ-name-new">
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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="publ-name" class="control-label">Author name:</label>
                                            <input type="text" class="form-control" id="publ-name-del">
                                        </div>
                                    </div>

                                </div>
                                
                                <div id="table-del">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" id="publ-del">Preview</button>
                                    <button type="button" class="btn btn-danger" id="publ-del-fin" style="display:none;">Delete</button>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
<!---------------------------------------- Modal End ---------------------------------------->
<!------------------------------------ Show result table ------------------------------------>
                    <div id="publ-table">
                    </div>
                    </div>
                    



                    <!-- script references -->
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/scripts.js"></script>

<!------------------------------------ Add Record Script ------------------------------------>
                    <script>
                        $("#publ-add").click(function () {
                            var name = $('#publ-name').val();
                            $.ajax({
                                type: "POST",
                                url: 'php/author_add.php',
                                data: ({
                                    "name": name
                                }),
                                success: function (msg) {  
                                    $('#table-show').hide;
                                    $('#table-show').html(msg);
                                    $('#table-show').fadeIn(500);
                                    
                                }
                            });
                        });
                    </script>

<!------------------------------------ Show Records Script ------------------------------------>
                    <script>

                        $("#show").click(function (event) {
                            $("#loader").show();
                            var page = 1;
                            $.ajax({
                                type: "POST",
                                url: "php/author_import.php",
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
                            var fil_name = document.getElementById("fil_name").value;
                            var page = $(this).text();
                            var flag = 1;
                            $.ajax({
                                type: "POST",
                                url: 'php/author_import.php',
                                data: ({
                                    "flag": flag,
                                    "page": page,
                                    "fil_id": fil_id,
                                    "fil_name": fil_name
                                    
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
                            var fil_id_name = document.getElementById("fil_id").value;
                            var fil_name_name = document.getElementById("fil_name").value;
                            var page_name = 1;
                            var flag_name = 1;

                            $.ajax({
                                type: "POST",
                                url: 'php/author_import.php',
                                data: ({
                                    "flag": flag_name,
                                    "page": page_name,
                                    "fil_id": fil_id_name,
                                    "fil_name": fil_name_name
                                    
                                }),
                                success: function (data) {                                         
                                    $('#tabl-body').html(data);
                                    $("#loader").hide(); 
                                }
                            }); 
                            }, 1000 );
                        }

                        $(document).on('input', '#fil_name', filtering);
                        
                        $(document).on('input', '#fil_id', filtering);
                        
                        $(document).on('click', '.go', function (event) {
                            $('html, body').animate({
                                scrollTop: $("#publ-table").offset().top
                            }, 0)
                            $("#loader").show();                         
                            var page =  document.getElementById("inp_page").value;
                            var fil_id = document.getElementById("fil_id").value;
                            var fil_name = document.getElementById("fil_name").value;
                            var flag = 1;
                            $.ajax({
                                type: "POST",
                                url: 'php/author_import.php',
                                data: ({
                                    "page": page,
                                    "fil_id": fil_id,
                                    "fil_name": fil_name,
                                    "flag": flag                                 
                                }),
                                success: function (data) {                                                                                           $('#tabl-body').html(data);
                                    $("#loader").hide();    
                                }
                            });
                        });
                        
                    </script>
<!------------------------------------ Show Updated Records Script ------------------------------------>
                   <script>
                        $("#publ-up").click(function () {
                            var name = $('#publ-name-up').val();

                            if (name == ''){
                                alert ('"Name" is empty, pls fill it');   
                            }
                            else{                          
                               $.ajax({
                                    type: "POST",
                                    url: 'php/author_pre.php',
                                    data: ({
                                        "name": name
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
                            var name = $('#publ-name-up').val();
                            var name_n = $('#publ-name-new').val();


                            if (name == '' || name_n == ''){
                                alert ("You should fill all information");   
                            }
                            else{                          
                                console.log(name);
                                console.log(name_n);
                                $.ajax({
                                    type: "POST",
                                    url: 'php/author_update.php',
                                    data: ({
                                        "name": name,
                                        "name_n": name_n
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
                            var name = $('#publ-name-del').val();

                            if (name == ''){
                                alert ('"Name" is empty, pls fill it');   
                            }
                            else{                          
                               $.ajax({
                                    type: "POST",
                                    url: 'php/author_pre.php',
                                    data: ({
                                        "name": name
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
                            var name = $('#publ-name-del').val();

                            if (name == ''){
                                alert ("You should fill all information");   
                            }
                            else{                          
                                $.ajax({
                                    type: "POST",
                                    url: 'php/author_delete.php',
                                    data: ({
                                        "name": name
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