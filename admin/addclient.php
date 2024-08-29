<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
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
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Client Name"  required name="clientName">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Client Image</label>
                                        <input type="file" class="form-control" name="clientImage">
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                            <?php if(isset($_REQUEST['e'])){?>
                                        <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Update</button>
                                        <?php } else {?>
                                        <button type="submit" name="addnewclient" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Submit</button>
                                        <?php }?>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>

                <?php
		addClient();
    }
?>

<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Client List</h4>
                                        <p class="card-title-desc">The Buttons extension for DataTables
                                            provides a common set of options, API methods and styling to display
                                            buttons on a page that will interact with a DataTable. The core library
                                            provides the based framework upon which plug-ins can built.
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" >
                                            <thead>
                                            <tr>
                                                        <th>NO</th>
                                                        <th>Client</th>
                                                        <th>Image</th>
                                                        <th>Delete</th>
                                                        <th>Edit</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php displayClient();	?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> 
