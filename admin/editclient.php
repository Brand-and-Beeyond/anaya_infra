<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editclient'])){
			
 			$clientId  = $_GET['editclient'];
			$getprojectCatSql = "SELECT * FROM clients WHERE clientId ='$clientId '";
			$getprojectCat = mysqli_query($conn,$getprojectCatSql);
			$getprojectCatRow = mysqli_fetch_array($getprojectCat);

			$clientName = $getprojectCatRow['clientName'];
			$clientImage = $getprojectCatRow['clientImage'];
            // $servicesheaderImage = $getprojectCatRow['servicesheaderImage'];
?>
<title>Add Client</title>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add New Client</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Client</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Client</h4>
                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                        <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Client Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Client Name"  required name="clientName" value="<?php echo $clientName;?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Client Image</label>
                                        <input type="file" class="form-control" name="clientImage">
                                        <img src="<?php echo 'resources/client_img/'.$clientImage;?>" height="100px" width="100px">
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                            <?php if(isset($_REQUEST['e'])){?>
                                        <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Update</button>
                                        <?php } else {?>
                                        <button type="submit" name="updateclient" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Submit</button>
                                        <?php }?>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>

                <?php
		updateClient();
    } 

}
?>


