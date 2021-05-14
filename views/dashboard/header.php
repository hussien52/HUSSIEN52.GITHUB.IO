
<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost/school/classes -->
<html lang="en" style="overflow: auto;">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""> 

        <title>E Library GA</title>

        <!-- Bootstrap core CSS -->
        <script src="<?php echo URL ?>public/jquery2.1.3.min.js"></script>
        <script src='<?php echo URL ?>public/jqueryUI/jquery-ui.js'></script>
        <script src='<?php echo URL ?>public/bootstrap/js/bootstrap.js'></script>
        <link rel='stylesheet' href="<?php echo URL ?>public/jqueryUI/jquery-ui.css" />
        <link rel='stylesheet' href="<?php echo URL ?>public/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo URL ?>views/dashboard/css/styles.css">
        <link rel="stylesheet" href="<?php echo URL ?>views/dashboard/assets/css/style-responsive.css">
        <link rel="stylesheet" href="<?php echo URL ?>views/index/css/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="<?php echo URL ?>public/font-awesome/css/font-awesome.css" media="screen" type="text/css" />
        <!--external css-->
        <link rel="stylesheet" type="text/css" href="<?php echo URL ?>views/dashboard/resources/style.css">    

        <!-- Custom styles for this template -->
        <link href="<?php echo URL ?>views/dashboard/assets/css/style.css" rel="stylesheet">


        <link href="<?php echo URL ?>views/dashboard/file_upload/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>views/dashboard/datetimepicker/build/css/bootstrap-datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL ?>views/dashboard/resources/jquery.gritter.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL ?>views/dashboard/resources/zabuto_calender.css" />
        <script src="<?php echo URL ?>views/dashboard/file_upload/js/fileinput.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/moment.js"></script>

<!--        <script src="<?php echo URL; ?>views/dashboard/datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
        <script src='<?php echo URL ?>views/dashboard/resources/jquery.nicescroll.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/jquery.scrollTo.min.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/jquery.dcjqaccordion.2.7.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/script.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/common-scripts.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/jquery.gritter.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/gritter-conf.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/jquery.sparkline.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/sparkline-chart.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/Chart.js'></script>
        <script src='<?php echo URL ?>views/dashboard/resources/zabuto_calender.js'></script>-->


    </head>
    <body style="">
        <header class="header" style="padding:0 15%">
            <!--            <div class="sidebar-toggle-box">
                            <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
                        </div>-->
            <!--logo start-->
            <a href="http://localhost/ElibraryGA" class="logo col-sm-3 col-xs-6">  <h1 ><img class="image"src="<?php echo URL ?>public/images/eLibrary.jpg"></h1><small><small style="text-transform: lowercase; color: #424a5d">nothing is hidden</small></small></a>

            <nav class="navbar  navbar-inverse col-sm-9" style="margin-top: 34px;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-size: 16px">
                        <ul class="nav navbar-nav  navbar-right">
                            <li><a href="#" data-toggle="modal" data-target="#myModal">How it works</a></li>
                            <!--<li><a href="#">Contact Us</a></li>-->
                        </ul>
                        <!--<form class="navbar-form navbar-left" role="search">-->
                            <div class="nav text-danger col-xs-9 col-sm-9" id="top_menu">
                                <div class="form-group has-success has-feedback 
                                <?php
                                if ($this->search != "true") {
                                    echo "hidden";
                                }
                                ?>">
                                    <input type="text" class="form-control btn-lg" id="searchForm" aria-describedby="inputSuccess2Status" value="<?php if(isset($this->document[0]['title'])) echo $this->document[0]['title']?>" placeholder="search" attr="<?php echo $this->doc ?>">
                                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                </div>
                            </div>
<!--                        </form>-->
                       
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


            <!--logo end-->
        </header>


        <aside>
            <div id="sidebar" class="nav-collapse col-sm-2" ;>
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion" style="display: block;">
                    <?php if (Session::get("usertype") == 2) { ?>
                        <!--                        <li class="sub-menu">
                                                    <a href="http://localhost/ElibraryGA/dashboard/users">
                                                        <i class="fa fa-user"></i>
                                                        <span>Users</span>
                                                    </a>
                        
                                                </li>-->

                    <?php } ?>
                    <li class="sub-menu">
                        <a href="http://localhost/ElibraryGA/dashboard/documents">
                            <i class="fa fa-cloud"></i>
                            <span>Browse Books</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="http://localhost/ElibraryGA/dashboard/save">
                            <i class="fa fa-file"></i>
                            <span>Add New Book</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="http://localhost/ElibraryGA/dashboard/my_documents">
                            <i class="fa fa-cloud-upload"></i>
                            <span>My Online Books</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="http://localhost/ElibraryGA/dashboard/savedocuments">
                            <i class="fa fa-cloud-download"></i>
                            <span>My Saved Books</span>
                        </a>
                    </li>
                    <li class="sub-menu" style="background: red" id="logout" class="logout">
                        <a href="http://localhost/ElibraryGA/index/logout">
                            <i class="fa fa-key"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <button name="mybtn" id="mybtn" ></button>
                <!-- sidebar menu end-->
            </div>
        </aside>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">How it Works</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li><h2>Browse Books</h2></li>
                                    This allow you to browse through books from different department using the search as a way of filtering by parameter
                                    <li><h2>Add New Books</h2></li>
                                    This allow you to add books that can be accessible online (to all users) or saved as personal library book (accessible only to yu) using the submit button and save button respectively
                                    <li><h2>My Online  Books</h2></li>
                                    This are your collection of books that you allow other users to have access to on the platform
                                    <li><h2>My Saved Books</h2></li>
                                    This are your collection of books that only you have access to on the platform
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        <!--sidebar end-->
        <div class="container kv-main">

            <script>
                $(function(){
                   
                    
                   $(document).on("keyup , click","#searchForm",function (e) {
                        e.preventDefault();
                        var str="";
                        if($(this).val().length===0 && $(this).attr("attr")=="true"){
                            $.post("http://localhost/ElibraryGA/dashboard/search", {
                                param: ' '
                            }, function (data) {
                                res=JSON.parse(data);
                                $.each(res, function(id,data){
                                    str+=data;  
                                })
                                str=' <div class="feeds">'+str+'</div>';
                                $(".feeds").replaceWith(str);
                            });
                        }
                        else if($(this).val().length>=3 && $(this).attr("attr")=="true"){
                            $.post("http://localhost/ElibraryGA/dashboard/search", {
                                param: $(this).val()
                            }, function (data) {
                                res=JSON.parse(data);
                                $.each(res, function(id,data){
                                    str+=data;  
                                })
                                str=' <div class="feeds">'+str+'</div>';
                                $(".feeds").replaceWith(str);
                            });
                        }else if($(this).val().length>=3 && $(this).attr("attr")=="false")
                        {
                            $.post("http://localhost/ElibraryGA/dashboard/mysearch", {
                                param: $(this).val()
                            }, function (data) {
                                res=JSON.parse(data);
                                $.each(res, function(id,data){
                                    str+=data;  
                                })
                                str=' <div class="classes_cont">'+str+'</div>';
                                $(".classes_cont").replaceWith(str);
                            });  
                        }
                        else if($(this).val().length===0 && $(this).attr("attr")=="false"){
                           $.post("http://localhost/ElibraryGA/dashboard/mysearch", {
                                param: $(this).val()
                            }, function (data) {
                                res=JSON.parse(data);
                                $.each(res, function(id,data){
                                    str+=data;  
                                })
                                str=' <div class="classes_cont">'+str+'</div>';
                                $(".classes_cont").replaceWith(str);
                            }); 
                        }
                    });
                })
                
                
               

            </script>
            <style>
                .label{
                        color: #337ab7;
                            padding: 0;
                }
                .form-group{
                       margin: 0px;
                }
            </style>
