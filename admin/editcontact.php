<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editcontact'])){
			
 			$contactId = $_GET['editcontact'];
			$getcontactSql = "SELECT * FROM contactus WHERE contactId='$contactId'";
			$getcontact = mysqli_query($conn,$getcontactSql);
			$getcontactRow = mysqli_fetch_array($getcontact);

			$contactAddress = $getcontactRow['contactAddress'];
            $contactEmail_1 = $getcontactRow['contactEmail_1'];
			$contactEmail_2 = $getcontactRow['contactEmail_2'];
            $contactEmail_3 = $getcontactRow['contactEmail_3'];
            $contactNum_1 = $getcontactRow['contactNum_1'];
            $contactNum_2 = $getcontactRow['contactNum_2'];
            $contactNum_3 = $getcontactRow['contactNum_3'];
            

?>
<title>Edit Contact</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit  Contact</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Contact</li>
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
                            <h4 class="card-title">Edit Contact</h4>
                            <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Contact No. 1</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Contact No 1" required name="contactNum_1" value="<?php echo $contactNum_1; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Contact No 2</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="Contact No 2"  name="contactNum_2" value="<?php echo $contactNum_2; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom04">Contact No 3</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Contact No 3"  name="contactNum_3" value="<?php echo $contactNum_3; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Email 1</label>
                                            <input type="email" class="form-control" id="validationCustom05" placeholder="Email 1" required name="contactEmail_1" value="<?php echo $contactEmail_1; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Email 2</label>
                                            <input type="email" class="form-control" id="validationCustom05" placeholder="Email 2"  name="contactEmail_2" value="<?php echo $contactEmail_2; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Email 3</label>
                                            <input type="email" class="form-control" id="validationCustom05" placeholder="Email 3"  name="contactEmail_3" value="<?php echo $contactEmail_3; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Address</label>
                                            <textarea class="form-control ckeditor" name="contactAddress"><?php echo $contactAddress;?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <!-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="invalidCheck" required name="admin">
                                                <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <?php if(isset($_REQUEST['e'])){ ?>
                                    <!-- <button type="submit" name="update" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>&nbsp;Update
                                    </button> -->
                                <?php } else { ?>
                                    <button type="submit" name="updatecontact" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>&nbsp;Update
                                    </button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <?php updateContact(); ?>
        </div> <!-- end container-fluid -->

        
    </div> <!-- end page-content -->
</div> <!-- end main-content -->

<?php
    }}
?>
