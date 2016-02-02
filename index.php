<!DOCTYPE html>
<html>
    <head>
        <title>PHP Email Contact Form</title>
        <meta charset="utf-8" />
        <meta name="keywords" content="Email, Contact, Form, Submit, PHP" />
        <meta name="description" content="Submitting and email contaact form" />
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="main.scss" />
    </head>
    <body>

        <?php

        if($_POST["submit"]){

            $result = "<div class='alert alert-success'>Form Submitted Successfully</div>";
        }

        if(!$_POST["fname"]){

            $error = "<br />Please enter your first name";
        }

        if(!$_POST["lname"]){

            $error.= "<br />Please enter your last name";
        }

        if(!$_POST["email"]){

            $error.= "<br />Please enter your email address";
        }

        if(!$_POST["comment"]){

            $error.= "<br />Please leave comments";
        }

        if ($_POST["email"] != "" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error.= "<br />Please enter a valid email address";
        }

        if($error){
            $result = "<div class='alert alert-danger'><strong>There are errors(s) in your form: $error</strong></div>";
        } else {
               if( mail("marcus.warnsley@gmail.com", "Coming from Email Contact Form", "Name: ".$_POST["fname"]." ".$_POST["lname"].
                    "<br />".
                    "Email: ".$_POST["email"].
                    "<br/>"."Subject: ".$_POST["subject"].
                    "<br />".
                    "Comments: ".$_POST["comment"]
                )){
                   $result = "<div class='alert alert-success'><strong>Thank You!</strong></div>";
               } else {
                   $result = "<div class='alert alert-error'><strong>Sorry, there was an error sending your message. Please try again later.</strong></div>";
               }
        }

        ?>


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="form-container">
                        <h1>Email Contact Form</h1>
                        <p class="lead">Please get in touch - I'll get back to you as soon as possible. Thank You!</p>
                        <?php

                        echo $result;

                        ?>
                        <form method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
                                <input class="form-control" type="text" name="lname" placeholder="Last Name"><br>
                                <input class="form-control" type="text" name="email" placeholder="Email Address"><br>
                                <input class="form-control" type="text" name="subject" placeholder="Subject"><br>
                                <textarea class="form-control" name="comment" placeholder="Comments"></textarea><br>
                                <input class="btn btn-success btn-lg" type="submit" name="submit" value="SEND">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    </body>
</html>