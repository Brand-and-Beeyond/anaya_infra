<?php

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Home</li>

                    <li>
                        <a href="index.php?dashboard" class="waves-effect">
                            <i class="mdi mdi-home-variant-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?addadmin" class=" waves-effect">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Add Admin</span>
                        </a>
                    </li>
                    <li class="menu-title">Projects</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-note-plus-outline"></i>
                            
                            <span>Project</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.php?addprojectcategory">Add Project Category</a></li>
                            <li><a href="index.php?addproject">Add Projects</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Career</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-account-plus-outline"></i>
                            
                            <span>Career</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.php?addvacancy">Add Vacancy</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Clients</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-note-plus-outline"></i>
                            
                            <span>Clients</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.php?addclient">Add Clients</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Content Managment</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-note-plus-outline"></i>
                            
                            <span>Pages</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.php?addvacancy">Manage Home Page</a></li>
                            <li><a href="index.php?addvacancy">Manage About us Page</a></li>
                            <li><a href="index.php?addcontact">Manage Contact us Page</a></li>
                        </ul>
                    </li>
                   
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
    <?php }?>