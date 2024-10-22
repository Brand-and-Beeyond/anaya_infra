<!-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> -->
<?php

if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    ?>
    <style>
        .ckeditor-container {
            resize: both;
            /* Enables resizing for both directions */
            overflow: hidden;
            /* Hide any overflow */
            padding: 5px;
            border: 1px solid #ddd;
            /* Add a border for resizing visibility */
            min-height: 200px;
            /* Minimum height for resizing */
            min-width: 300px;
            /* Minimum width for resizing */
        }
    </style>

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
                                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data"
                                    id="quill-form">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">About Description</label>
                                                <!-- <div class="quill-editor" id="aboutDesc" style="height: 150px;"></div> -->
                                                <textarea name="aboutDesc" id="aboutDesc-text" class="ckeditor"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Vision</label>
                                                <!-- <div class="quill-editor" id="aboutVision" style="height: 150px;"></div> -->
                                                <textarea name="aboutVision" id="aboutVision-text"
                                                    class="ckeditor"></textarea>


                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Mission</label>

                                                <!-- <div class="quill-editor" id="aboutMission" style="height: 150px;"></div> -->
                                                <textarea name="aboutMission" id="aboutMission-text"
                                                    class="ckeditor"></textarea>



                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Values</label>
                                                <!-- <div class="quill-editor" id="aboutValues" style="height: 150px;"></div> -->
                                                <textarea name="aboutValues" id="aboutValues-text"
                                                    class="ckeditor"></textarea>


                                            </div>
                                        </div>

                                    </div>
                                    <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                                    <?php if (isset($_REQUEST['e'])) { ?>
                                        <!-- <button type="submit" name="update" class="btn btn-primary"><i
                                                class="fa fa-edit"></i>&nbsp;Update</button> -->
                                    <?php } else { ?>
                                        <button type="submit" name="addnewabout" class="btn btn-primary"><i
                                                class="fa fa-check"></i>&nbsp;Submit</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <?php
                addAbout();
}
?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Client List</h4>
                            <p class="card-title-desc">
                            </p>

                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Description</th>
                                        <th>Vision</th>
                                        <th>Mission</th>
                                        <th>Values</th>
                                        <th>Edit</th>
                                        <!-- <th>Delete</th> -->
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php displayAbout(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> -->