<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editvacancy'])){
			
			$vacancyId = $_GET['editvacancy'];
			$getVacancySql = "SELECT * FROM vacancy WHERE vacancyId='$vacancyId'";
			$getVacancy = mysqli_query($conn,$getVacancySql);
			$getVacancyRow = mysqli_fetch_array($getVacancy);

			$postName = $getVacancyRow['postName'];
			$experience = $getVacancyRow['experience'];
			$no_vacancies = $getVacancyRow['no_vacancies'];
			$qualification = $getVacancyRow['qualification'];
			$jobdescription = $getVacancyRow['jobdescription'];
			$jobtype = $getVacancyRow['jobtype'];
			$skill1 = $getVacancyRow['skill1'];
			$location1 = $getVacancyRow['location1'];
            $vacancyheaderImage = $getVacancyRow['vacancyheaderImage'];
			
?>
<title>Edit Project Category</title>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit vacancy</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit vacancy</li>
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
                        <h4 class="card-title">Add Vacancy</h4>
                        <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                        <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Post Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Post Name"  required name="postName" value="<?php echo $postName;?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Experience</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Experience"  required name="experience" value="<?php echo $experience;?>">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom03">No of Vacancies</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="No of Vacancies" required name="no_vacancies" value="<?php echo $no_vacancies;?>"> 
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom04">Qualification</label>
                                        <input type="text" class="form-control" id="validationCustom04" placeholder="Qualification" required name="qualification" value="<?php echo $qualification;?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Skills Required</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Skills Required" required name="skill1" value="<?php echo $skill1;?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="jobtype">Job type</label>
                                        <select class="form-select" name="jobtype" required>
            <option value="" disabled <?php echo empty($jobtype) ? 'selected' : ''; ?>>Choose job type</option>
            <option value="Full time" <?php echo $jobtype === 'Full time' ? 'selected' : ''; ?>>Full time</option>
            <option value="Part time" <?php echo $jobtype === 'Part time' ? 'selected' : ''; ?>>Part time</option>
        </select>

                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Location</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Location" required name="location1" value="<?php echo $location1;?>">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Job description</label>
                                                <textarea name="jobdescription" id="" class="form-control"
                                                    rows="6"><?php echo $jobdescription;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required name="admin">
                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                            <?php if(isset($_REQUEST['e'])){?>
                                        <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Update</button>
                                        <?php } else {?>
                                        <button type="submit" name="updatevacancy" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Submit</button>
                                        <?php }?>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>


       <?php updateVacancy();?>

<?php }}?>