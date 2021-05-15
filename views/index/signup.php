<?php
//ob_start();
//session_start();
//if (isset($_SESSION["username"])) {
//    header("Location: ../index.php");
//}
?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Tour The World | Register</title>
        <script src="<?php echo URL ?>public/jquery2.1.3.min.js"></script>
        <script src='<?php echo URL ?>public/jqueryUI/jquery-ui.js'></script>
        <link rel='stylesheet' href="<?php echo URL ?>public/jqueryUI/jquery-ui.css" />
        <link rel='stylesheet' href="<?php echo URL ?>public/bootstrap/css/bootstrap.css" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="<?php echo URL ?>views/index/css/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="<?php echo URL ?>views/index/css/style_1.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="<?php echo URL ?>public/font-awesome/css/font-awesome.css" media="screen" type="text/css" />

    </head>

    <body>

        <div class="login-card big" >
            <h1><h1 ><img class="image"src="<?php echo URL ?>public/images/eLibrary.jpg"> <br/> Register</h1><br></h1>
            <h5>fill the field below to register</h5><br />
            <form enctype="multipart/form-data" id="post_form4">
                <section class="clearfix">
                    <div class="form-group">
                        <input type="text" class="form-control" id="surname" placeholder="Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="othernames" placeholder="Matric No" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="mobileno" placeholder="Mobile No" required="required" />
                    </div>

                    <div class="form-group" >
                        <select id="email" class="form-control" placeholder="Departemnt" required="required">
                            <option value="Computer Science">Computer Science</option>
                            <option value="SLT">SLT</option>
                            <option value="Food Technology">Food Technology</option>
                            <option value="Polymer">Polymer</option>
                            <option value="Textile">Textile</option>
                        </select>
                        <!--                         
                                                <input type="email" class="form-control" id="email" placeholder="Departemnt" required="required" />-->
                    </div>
                    <div class="form-group" >
                        <select id="address" placeholder="Level" required="required" class="form-control">
                            <option >Level</option>
                            <option value="HND 2">HND 2</option>
                            <option value="HND 1">HND 1</option>
                            <option value="Nd 2">ND 2</option>
                            <option value="ND 1">ND 1</option>
                        </select> 
                     <!--<input type="level" class="form-control" id="email" placeholder="Level" required="required" />-->
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" required="required"/>
                    </div>
                    <!--                    <div class="form-group">
                                            <textarea class="form-control"  id="address"rows="3" placeholder="Address" required="required"></textarea>
                                        </div>-->

                </section><!-- content -->  
                <button type="submit" class="btn btn-lg  btn-primary" id="save_about" style="width: 100%">Submit</button>
                <div style="margin: auto;text-align: center;width: 100%;font-style: italic">
                    <span class="alert-danger in-pass shownot">Invalid Login details</span>
                    <span class="alert-danger in-require shownot">Please Supply all feed information</span>
                    <span class="alert-warning up-pass shownot">User id not allow, choose a new one</span>
                    <span class="alert-success login-success shownot">Login Successfully</span></div>

            </form>


            <div class="fresher" style="text-align: center">
                Already have an account?<a href="index" class="btn btn-link Sign Up">Login!</a>
            </div>
        </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->



    </body>

    <script>
        $(function () {
            $("post_form4").submit(function (e) {
                e.preventDefault();
            });
            $("post_form4").click(function (e) {
                e.preventDefault();
            });
            $("#save_about").click(function(e){
               
                if ($("#surname").val().length == 0) {
                    $("#surname").focus();
                    $("#surname").select();
                    $(".in-require").slideDown();
                    return false;
                }
                if ($("#othernames").val().length == 0) {
                    $("#othernames").focus();
                    $("#othernames").select();
                    $(".in-require").slideDown();
                    return false;
                }
                if ($("#mobileno").val().length == 0) {
                    $("#mobileno").focus();
                    $("#mobileno").select();
                    $(".in-require").slideDown();
                    return false;
                }
                if ($("#email").val().length == 0) {
                    $("#email").focus();
                    $("#email").select();
                    $(".in-require").slideDown();
                    return false;
                }
                if ($("#address").val().length == 0) {
                    $("#address").focus();
                    $("#address").select();
                    $(".in-require").slideDown();
                    return false;
                }
                if ($("#password").val().length == 0) {
                    $("#password").focus();
                    $("#password").select();
                    $(".in-require").slideDown();
                    return false;
                }
                $(".login-success").hide();
                $(".in-pass").hide();
                $(".up-pass").hide();
                $.post("http://localhost/ElibraryGA/index/login",
                {
                    firstname:$.trim($("#surname").val()),
                    usr:$.trim($("#othernames").val()),
                    email:$.trim($("#email").val()),
                    mobileno:$("#mobileno").val(),
                    pwd:$("#password").val(),
                    level:$("#address").val(),
                    whr: 'signup'
                },
                function(data){
                    if (data === "0") {
                        $(".in-pass").slideDown();
                    } else if (data === "1") {
                        $(".login-success").slideDown();
                        $(location).attr("href","../index.php");
                    } else if (data === "2") {
                        $(".up-pass").slideDown();
                    }else{
                        // alert("your lock code is: "+data+" \nmake sure you secure it, this is your real access to your file");
                        //  $(".login-success").slideDown();
                        // $(location).attr("href","../index.php");
                    }
                    // return false;
                    // e.preventDefault();
                })
                e.preventDefault();
            })

            $(".up-pass, .login-success, .in-pass, .in-require").mousemove(function () {
                $(this).fadeOut();
            })
            $(".in-require").hide();
            $("#post_form4").submit(function (e) {
                return false;
                //   e.preventDefault();
            });
            $("#post_form4").click(function (e) {
                return false;
                //   e.preventDefault();
            });
        })
    </script>


</html>