<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editproject'])){
			
 			$projectId = $_GET['editproject'];
			$getprojectSql = "SELECT * FROM project WHERE projectId='$projectId'";
			$getproject = mysqli_query($conn,$getprojectSql);
			$getprojectRow = mysqli_fetch_array($getproject);

			$projectName = $getprojectRow['projectName'];
            $projectDesc = $getprojectRow['projectDesc'];
			$projectImg = $getprojectRow['projectImg'];
            $projectCatId = $getprojectRow['projectCatId'];
            // $servicesheaderImage = $getBlogsRow['servicesheaderImage'];
            $getprojectCatNameSql = "SELECT * FROM projectcategory WHERE projectCatId='$projectCatId'";
            $getprojectCatName = mysqli_query($connF,$getprojectCatNameSql);
            $getprojectCatNameRow = mysqli_fetch_array($getprojectCatName);
            $projectCatName = $getprojectCatNameRow['projectCatName'];

            $projectstatusId = $getprojectRow['projectstatusId'];
            // $servicesheaderImage = $getBlogsRow['servicesheaderImage'];
            $getprojectstatusNameSql = "SELECT * FROM projectstatus WHERE projectstatusId='$projectstatusId'";
            $getprojectstatusName = mysqli_query($connF,$getprojectstatusNameSql);
            $getprojectstatusNameRow = mysqli_fetch_array($getprojectstatusName);
            $projectstatusName = $getprojectstatusNameRow['projectstatus'];

            // $servicesheaderImage = $getprojectRow['servicesheaderImage'];
?>
<title>Edit Project Category</title>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add New Project Category</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Project Category</li>
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
                        <h4 class="card-title">Add Project Category</h4>
                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                        <form class="needs-validation" novalidate method="post"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Project  Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Project Category Name"   name="projectName" value="<?php echo $projectName;?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Project Image</label>
                                        <input type="file" class="form-control" id="formGroupExampleInput"   name="projectImg" value="<?php echo $projectImg;?>"><img src="<?php echo 'resources/project_img/'.$projectImg;?>" width="200" height="200">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Project Category </label>
                                        <select name="projectCatId"  class="form-control "id="">
										<option value="<?php echo $projectCatId;?>"><?php echo $projectCatName;?></option> 
										<?php
											$sql = "SELECT * FROM projectcategory";
											$getExpertise = mysqli_query($conn,$sql);
											while($rowExpertise=mysqli_fetch_array($getExpertise)){
												$projectCatId = $rowExpertise['projectCatId'];
												$projectCatName = $rowExpertise['projectCatName'];
												echo "<option value='$projectCatId'>$projectCatName</option>";
											}
										?>
									</select>    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Project Category </label>
                                        <select name="projectstatusId"  class="form-control "id="">
										<option value="<?php echo $projectstatusId;?>"><?php echo $projectstatusName;?></option> 
										<?php
											$sql1 = "SELECT * FROM projectstatus";
											$getExpertise1 = mysqli_query($conn,$sql1);
											while($rowExpertise1=mysqli_fetch_array($getExpertise1)){
												$projectstatusId = $rowExpertise1['projectstatusId'];
												$projectstatusName = $rowExpertise1['projectstatus'];
												echo "<option value='$projectstatusId'>$projectstatusName</option>";
											}
										?>
									</select>    
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Project Description </label>
                                     
                                        <textarea class="form-control ckeditor" name="projectDesc"><?php echo $projectDesc;?></textarea>
                                        </div>

                                </div>
                                `
                            </div>
                            
                            <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                            <?php if(isset($_REQUEST['e'])){?>
                                        <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Update</button>
                                        <?php } else {?>
                                        <button type="submit" name="editproject" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Update</button>
                                        <?php }?>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>


       <?php updateProject();?>

<?php }}?>