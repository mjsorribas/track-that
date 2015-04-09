
<div class="nav-side-menu">
<!--div class="brand">Brand Logo</div-->
	<!--i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i-->
    <div class="menu-list">
        <ul id="menu-content" class="menu-content out">
            <li class=<?php echo ($sidebarActivePage == "overview" ? "active":""); ?>>
                <a href="index.php">
                    <i class="fa fa-dashboard fa-lg"></i> Overview
                </a>
            </li>
            <li class=<?php echo ($sidebarActivePage == "products" ? "active" : ""); ?>>
            	<a href="products.php">
            		<i class="fa fa-user fa-lg"></i> Products
            	</a>
            </li>
            <li data-toggle="collapse" data-target="#service" class="collapsed">
            	<a href="#"><i class="fa fa-globe fa-lg"></i> Projects<span class="arrow"></span></a>
            </li>  
            <ul <?php 
                        if ($sidebarActivePage == "projects-overview" || $sidebarActivePage == "projects-add" || $sidebarActivePage == "projects-edit") {
                          // If it's any project page, do the following.
                          echo "class='sub-menu active'"; 
                        } else {
                          // It's not a project page.
                          echo "class='sub-menu collapse'";
                        }
                      ?> id="service">
              <?php
                echo ($sidebarActivePage == "projects-overview" ? "<li class='active'>" : "<li>");
              ?>
                  <a href="projects.php">Overview</a>
              </li>

              <?php
                echo ($sidebarActivePage == "projects-add" ? "<li class='active'>" : "<li>");
              ?>
                  <a href="addProject.php">Add Project</a>
              </li>

              <?php
                echo ($sidebarActivePage == "projects-edit" ? "<li class='active'>" : "<li>");
              ?>
                <a href="editProject.php">Edit Project</a>
              </li>
            </ul>
        </ul>
    </div>
</div>