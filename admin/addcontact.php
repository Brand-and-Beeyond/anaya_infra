<?php
    if(!isset($_SESSION['email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>
<title>Add Contact</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Contact</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Contact</li>
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
                            <h4 class="card-title">Add Contact</h4>
                            <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Contact No. 1</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Contact No 1" required name="contactNum_1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Contact No 2</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="Contact No 2" required name="contactNum_2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom04">Contact No 3</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Contact No 3" required name="contactNum_3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Email 1</label>
                                            <input type="email" class="form-control" id="validationCustom05" placeholder="Email 1" required name="contactEmail_1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Email 2</label>
                                            <input type="email" class="form-control" id="validationCustom05" placeholder="Email 2" required name="contactEmail_2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Email 3</label>
                                            <input type="email" class="form-control" id="validationCustom05" placeholder="Email 3" required name="contactEmail_3">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Address</label>
                                            <textarea class="form-control ckeditor" name="contactAddress"></textarea>
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

                                <?php if(isset($_REQUEST['e'])){ ?>
                                    <button type="submit" name="update" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>&nbsp;Update
                                    </button>
                                <?php } else { ?>
                                    <button type="submit" name="addnewcontact" class="btn btn-primary">
                                        <i class="fa fa-check"></i>&nbsp;Submit
                                    </button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <?php addContactUs(); ?>
        </div> <!-- end container-fluid -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Buttons example</h4>
                        <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods, and styling to display buttons on a page that will interact with a DataTable. The core library provides the base framework upon which plug-ins can be built.</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Address</th>
                                    <th>Email 1</th>
                                    <th>Email 2</th>
                                    <th>Email 3</th>
                                    <th>Contact 1</th>
                                    <th>Contact 2</th>
                                    <th>Contact 3</th>
                                    
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php displayContactUs(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end page-content -->
</div> <!-- end main-content -->

<?php
    }
?>
