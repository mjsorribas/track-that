        <!-- Start top Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">Inventory System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi, <?php echo $_SESSION['userName']."!";?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                            <?php
                            // Dynamically generate link
                            if (basename($_SERVER['PHP_SELF']) == "addproduct.php") {
                                // We're on the addProduct page.
                                echo "<a href='index.php'><i class='fa fa-sign-in'></i> Go to Management Area</a>";
                            } else {
                                // We're in the backend.
                                echo "<a href='addproduct.php'><i class='fa fa-sign-in'></i> Go to Add Product Area</a>";
                            }
                            ?>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
        <!-- End top Navbar -->