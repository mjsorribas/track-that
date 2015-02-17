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
    </head>
    <body>
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
                    <li><a href="#">Hi, User!</a></li>
                  </ul>
                </div>
            </div>
        </nav>

        <!-- Scripts -->
        <script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script> <!-- jQuery must be loaded first for Bootstrap to not complain -->
        <script type="text/javascript" src="./js/bootstrap-3.3.2.min.js"></script>
    </body>
</html>
