<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js"></script>
    </head>
    <body>
        <header>
            <div id="logo">
                <h3>WOMEN'S ASSOCIATION</h3>
            </div>
            <ul>
                <li><a data-toggle="modal" data-target="#myModal">Contact Us</a></li>
                <li><a href="http://"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                <li><a href="http://"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            </ul>
        </header>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">User Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="num">Phone No.:</label>
                                <input type="number" class="form-control" id="num" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label for="cmt">Comment:</label>
                                <textarea class="form-control" id="cmt" rows="5" placeholder="Enter your comment..."></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cansel</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>