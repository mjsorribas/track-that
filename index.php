<!DOCTYPE html>
<!--
        index.php - The landing page of the system
        Created on: 2/16/15
        Created by: Dan
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inventory System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sidebar.css">
    </head>
    <body>
        <!-- Start top Navbar -->

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">CTS Remote Inventory System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi, User! <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
        <!-- End top Navbar -->

        <!-- Start left sidebar -->

        <div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- End left sidebar -->

        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery must be loaded first for Bootstrap to not complain -->
        <script type="text/javascript" src="js/bootstrap-3.3.2.min.js"></script>
    </body>
</html>
