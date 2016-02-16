<?php session_start();?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Publication msnsgment system</title>
        <link href="css/bootstrap.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <?php include("php/menu.php")?>
        </div>div class="container">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-9">

                    <h4 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-user">
    </i>
    Account Access
  </h4>
                    <div style="padding: 20px;" id="form-olvidado">
                        <form accept-charset="UTF-8" role="form" id="login-form" action="access.php">
                            <h4 class="">
      Signin!
    </h4>
                            <fieldset>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
            @
          </span>
                                    <input class="form-control" placeholder="Email" id="username_email" name="email" type="email" required="" autofocus="">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
                                    <input class="form-control" id="password_user" placeholder="Password" name="password" type="password" value="" required="">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" id="register_submit">
                                        Access
                                    </button>
                                    <p class="help-block">
                                        <a class="pull-right text-muted" href="#" id="olvidado" onclick="olvidado()"><small>Forgot your password?</small></a>
                                        <a class="pull-left text-muted" href="#" id="olvidado2" onclick="olvidado2()"><small>Signup!</small></a>

                                    </p>
                                </div>
                        </form>
                        </fieldset>

                    </div>

                    <div style="display: none;" id="form-olvidado1">
                        <h4 class="">
      Forgot your password?
    </h4>
                        <form accept-charset="UTF-8" role="form" id="login-recordar" method="post" action="auth.php">
                            <fieldset>
                                <span class="help-block">
          Email address you use to log in to your account
          <br>
          We'll send you an email with instructions to choose a new password.
        </span>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
            @
          </span>
                                    <input class="form-control" placeholder="Email" name="email" type="email" required="">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                                    Continue
                                </button>
                                <p class="help-block">
                                    <a class="text-muted" href="#" id="acceso1" onclick="acceso1()"><small>Account Access</small></a>

                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <div style="display: none;" id="form-olvidado2">
                        <h4 class="">
      Welcome!
    </h4>
                        <form accept-charset="UTF-8" role="form" id="login-recordar" method="post" action="auth_new.php">
                            <fieldset>
                                <span class="help-block">
          Signup page
          <br>
          Please sign up and start!
        </span>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
            @
          </span>
                                    <input class="form-control" placeholder="Email" name="email" type="email" required="">
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
                                    <input class="form-control" placeholder="Password" name="password_new" type="password" required="">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
                                    <input class="form-control" placeholder="Repeat Password" name="password_new_2" type="password" required="">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                                    Continue
                                </button>
                                <p class="help-block">
                                    <a class="text-muted" href="#" id="acceso2" onclick="acceso2()"><small>Account Access</small></a>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function olvidado() {
                $('div#form-olvidado1').toggle('500');
                $('div#form-olvidado').toggle('500');
            }

            function acceso1() {
                $('div#form-olvidado').toggle('500');
                $('div#form-olvidado1').toggle('500');
            }

            function olvidado2() {
                $('div#form-olvidado2').toggle('500');
                $('div#form-olvidado').toggle('500');
            }

            function acceso2() {
                $('div#form-olvidado').toggle('500');
                $('div#form-olvidado2').toggle('500');
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <script>
            $("#register_submit").click(function () {
                var username = $('#username_email').val();
                var password = $('#password_user').val();
                $.ajax({
                    type: "POST",
                    url: 'access.php',
                    data: ({
                        "email": username,
                        "password": password
                    }),
                    success: function (data) {
                        if (data == "Success!") {
                            $("body").delay(100).animate({
                                opacity: 0,
                                backgroundColor: '#000'
                            }, function () {
                                window.location = '/publication.php'
                            })
                        } else {
                            alert("Wrong Login or Pass");
                        }
                    },
                    error: function (data) {
                        alert(data);
                    }
                });
            });
        </script>

        <script>
            $("#login").click(function () {
                $.ajax({
                    type: "POST",
                    url: 'php/logout.php'
                });
            });
        </script>

        <script type="text/javascript">
            $(function () {
                $('#login-form').submit(function () {
                    return false;
                });
            });
        </script>
    </body>

    </html>