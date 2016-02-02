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



        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="form-container">
                        <form method="post">
                            <input type="text" name="fname" placeholder="First Name"><br>
                            <input type="text" name="lname" placeholder="Last Name"><br>
                            <input type="text" name="subject" placeholder="Subject"><br>
                            <input type="text" name="email" placeholder="Email Address"><br>
                            <input type="submit" name="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>