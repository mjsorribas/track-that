<!--
        index.php - The overview view of the system
        Created on: 2/17/15
        Created by: Dan
-->
<?php 
    require_once('template/security.php');
?>
    <head>
        <meta charset="UTF-8">
        <title>Inventory System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/index.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <body>
        <?php require_once("template/navbar.php"); ?>
        
        <div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
            <div class="row">
                <!-- Output the sidebar from the template folder -->
                <?php 
                    $sidebarActivePage = "overview";
                    require_once("template/sidebar.php"); 
                ?>
                <div class="col-md-offset-2 maincontent">
                    <h1 class="page-header">Overview</h1>
                    <p>Ideas for information here:</p>
                    <ul>
                        <li>Number of projects: Total/Active/Inactive</li>
                        <li>Parts added today: </li>
                    </ul>

                    <h2 class="sub-header">Latest Activity</h2>
                    <table class="table table-striped">
                        <tr>
                            <th class="left">Time</th>
                            <th>Event</th>
                        </tr>
                        <tr>
                            <td>2/18/15 10:28am</td>
                            <td>Ethan added an item to <a href="#">Alliance Insurance - 2 new cable drops</a></td>
                        </tr>
                        <tr>
                            <td>2/18/15 8:46am</td>
                            <td>Jeremy added project <a href="#">Alliance Insurance - 2 new cable drops</a></td>
                        </tr>
                        <tr>
                            <td>2/16/15 3:10pm</td>
                            <td>Chris changed project <a href="">BECSWCD - 3 Fiber Runs</a> status to Inactive</td>
                        </tr>
                        <tr>
                            <td>2/16/15 2:34pm</td>
                            <td>Chad added an item to <a href="#">First National Bank-New Front Cameras</a></td>
                        </tr>
                    </table>
                </div>
        </div><!-- container-fluid-->
        <?php require_once("template/footer.php"); ?>