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
                        <h1>Email Contact Form</h1>
                        <p class="lead">Please get in touch - I'll get back to you as soon as possible. Thank You!</p>
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
    </body>
</html>