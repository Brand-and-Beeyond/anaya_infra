<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editabout'])){
			
 			$aboutusId = $_GET['editabout'];
			$getprojectSql = "SELECT * FROM aboutus WHERE aboutusId='$aboutusId'";
			$getproject = mysqli_query($conn,$getprojectSql);
			$getprojectRow = mysqli_fetch_array($getproject);
			$aboutDesc = $getprojectRow['aboutDesc'];
            $aboutVision = $getprojectRow['aboutVision'];
            $aboutMission = $getprojectRow['aboutMission'];
            $aboutValues = $getprojectRow['aboutValues'];
			

            // $servicesheaderImage = $getprojectRow['servicesheaderImage'];
?>

    <title>Manage About Us</title>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Manage About Us</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add About Us</li>
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
                                <h4 class="card-title">Manage About Us</h4>
                                <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data" id="quill-form">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">About Description</label>
                                                <!-- <div class="quill-editor" id="aboutDesc" style="height: 150px;"></div> -->
                                                <textarea name="aboutDesc" id="aboutDesc-text" class="ckeditor"><?php echo $aboutDesc; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Vision</label>
                                                <!-- <div class="quill-editor" id="aboutVision" style="height: 150px;"></div> -->
                                                <textarea name="aboutVision" id="aboutVision-text" class="ckeditor"><?php echo $aboutVision; ?></textarea>
                                                 

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Mission</label>

                                                <!-- <div class="quill-editor" id="aboutMission" style="height: 150px;"></div> -->
                                                <textarea name="aboutMission" id="aboutMission-text" class="ckeditor"><?php echo $aboutMission; ?></textarea>
                                                 


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Values</label>
                                                <!-- <div class="quill-editor" id="aboutValues" style="height: 150px;"></div> -->
                                                <textarea name="aboutValues" id="aboutValues-text" class="ckeditor"><?php echo $aboutValues; ?></textarea>
                                                 

                                            </div>
                                        </div>

                                    </div>
                                    <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                                    <?php if (isset($_REQUEST['e'])) { ?>
                                        <!-- <button type="submit" name="update" class="btn btn-primary"><i
                                                class="fa fa-edit"></i>&nbsp;Update</button> -->
                                    <?php } else { ?>
                                        <button type="submit" name="editabout" class="btn btn-primary"><i
                                                class="fa fa-check"></i>&nbsp;Submit</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <?php
                updateAbout();
}
?>

            
            <!-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> -->
             <?php }?>