
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
            <ul class="sub-menu collapse" id="service">
              <li>Overview</li>
              <li>Add Project</li>
              <li>Edit Project</li>
            </ul>
        </ul>
 	</div>
</div>