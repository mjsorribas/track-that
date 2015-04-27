<?php 
/*
    index.php - The overview view of the system
    Created on: 2/17/15
    Created by: Dan
*/
    require_once('template/security.php');

    function createEvent ($row) {
        // Takes a mysqli_fetch_array array and creates a string containing the event description.
        // For now, the only descriptions are "added product" and "edited project"
        $desc = $row['user_name'];

        if ($row['ActivityType'] == "product_add") {
            $desc .= " added a product to <a href='products.php?projid=".$row['project_id']."'>".$row['proj_name']."</a>";
        } elseif ($row['ActivityType'] == "project_update") {
            $desc .= " edited project <a href='products.php?projid=".$row['project_id']."'>".$row['proj_name']."</a>";
        }
        return $desc;
    }
?>
    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Inventory System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/index.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <body>
        <?php 
            // INCLUDES
            require_once("template/navbar.php"); 
            require_once("template/includes.php");
            require_once("db/sql.php");
        ?>
        
        <div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
            <div class="row">
                <!-- Output the sidebar from the template folder -->
                <?php 
                    $sidebarActivePage = "overview";
                    require_once("template/sidebar.php"); 

                    // Get DB Data
                    $qryGetLatestActivity = "SELECT prod.added_on AS occured, 'product_add' AS ActivityType, users.user_name, prod.added_by AS user_id, proj.proj_name, prod.project_id FROM tbl_products as 
                                            prod INNER JOIN tbl_users AS users ON prod.added_by=users.user_id INNER JOIN tbl_projects AS proj ON prod.project_id=proj.proj_id UNION SELECT proj.updated_on AS 
                                            occured, 'project_update' AS ActivityType, users.user_name, proj.updated_by AS user_id, proj.proj_name, proj.proj_id FROM tbl_projects as proj INNER JOIN tbl_users 
                                            AS users ON proj.updated_by=users.user_id ORDER BY occured DESC LIMIT 20;";
                    // Execute query
                    $rsltGetLatestActivity = mysqli_query($conn, $qryGetLatestActivity);

                    if (!$rsltGetLatestActivity) {
                        die("Couldn't execute query on MySQL server.");
                    }

                ?>
                <div class="col-md-offset-2 maincontent">
                    <h1 class="page-header">Latest Activity</h1>
                    <!--p>Ideas for information here:</p>
                    <ul>
                        <li>Number of projects: Total/Active/Inactive</li>
                        <li>Parts added today: </li>
                    </ul>

                    <h2 class="sub-header">Latest Activity</h2-->
                    <table class="table table-striped">
                        <tr>
                            <th class="left">Time</th>
                            <th>Event</th>
                        </tr>
                        <?php
                            // Loop through the sql results
                            while($row = mysqli_fetch_array($rsltGetLatestActivity)) {
                                // For every result row, do the following.

                                // Create an event description

                                echo "<tr>\n\t";
                                echo "<td>".formatTime($row['occured'])."</td>\n";
                                echo "<td>".createEvent($row)."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div><!-- container-fluid-->
        <?php require_once("template/footer.php"); ?>