<?php

	session_start();
	include("include/dbcon.php");
	include("include/function.php");
	include("include/md5salt.php");

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
//	else if(isset($_SESSION['email'])){
//		echo "<script>window.open('index.php?dashboard','_self')</script>";
//	}
	else{
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <!-- <title>Dashboard | Upzet - Admin & Dashboard Template</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="resources/logo-sm.png">

    <!-- jvectormap -->
    <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    
        <!-- End Page-content -->
        <?php
					if(isset($_GET['dashboard'])){
						include("dashboard.php");
					}
				?>
				<?php
					if(isset($_GET['addaboutus'])){
						include("addaboutus.php");
					}
				?>
				<?php
					if(isset($_GET['addcontact'])){
						include("addcontact.php");
					}
				?>
				<?php
					if(isset($_GET['addprojectcategory'])){
						include("addprojectcategory.php");
					}
				?>
				<?php
					if(isset($_GET['addproject'])){
						include("addproject.php");
					}
				?>

					<?php
					if(isset($_GET['addclient'])){
						include("addclient.php");
					}
				?>
<?php
					if(isset($_GET['addvacancy'])){
						include("addvacancy.php");
					}
				?>
				
				<?php
					if(isset($_GET['deleteProjectCat'])){
						deleteProjectCat();
					}
				?>
				<?php
					if(isset($_GET['deleteProject'])){
						deleteProject();
					}
				?>
				
				<?php
					if(isset($_GET['deleteClient'])){
						deleteClient();
					}
				?>
				
                <?php
					if(isset($_GET['deleteAboutUs'])){
						deleteAboutUs();
					}
				?>

				 
				<?php
					if(isset($_GET['deleteVacancy'])){
						deleteVacancy();
					}
				?>
				<?php
					if(isset($_GET['editproject'])){
						include("editproject.php");
					}
				?>
				<?php
					if(isset($_GET['editprojectcategory'])){
						include("editprojectcategory.php");
					}
				?>
				<?php
					if(isset($_GET['editclient'])){
						include("editclient.php");
					}
				?>
				
				<?php
					if(isset($_GET['editabout'])){
						include("editabout.php");
					}
				?>
				<?php
					if(isset($_GET['editcontact'])){
						include("editcontact.php");
					}
				?>
                <?php
					if(isset($_GET['editvacancy'])){
						include("editvacancy.php");
					}
				?>
				
				<?php
					if(isset($_GET['addadmin'])){
						include('addadmin.php');
					}
				?>
				<?php
					if(isset($_GET['adddirector'])){
						include('adddirector.php');
					}
				?>
				<?php
					if(isset($_GET['viewadmins'])){
						include('viewAdmin.php');
					}
				?>
				<?php
					if(isset($_GET['deleteAdmin'])){
						deleteAdmin();
					}
				?>
				<?php
					if(isset($_GET['logout'])){
						include("logout.php");
					}
				?>

				</div>
				
				<?php } ?><?php include('footer.php'); ?>