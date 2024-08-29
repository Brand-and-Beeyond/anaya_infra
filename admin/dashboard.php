<?php

	if(!isset($_SESSION['email'])){
		// echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>

   <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Upzet</a></li> -->
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex text-muted">
                                    <div class="flex-shrink-0 me-3 align-self-center">
                                        <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                    <a href="index.php?addvacancy"><p class="mb-1 fs-4">Vacancy</p></a>
                                        <h5 class="mb-3"><?php countVacancy();?></h5>
                                        <!-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i
                                                    class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From
                                            previous</p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                    <div class="card">
                            <div class="card-body">
                                <div class="d-flex text-muted">
                                    <div class="flex-shrink-0 me-3 align-self-center">
                                        <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="index.php?addproject"><p class="mb-1 fs-4">Projects Ongoing</p></a>
                                        <h5 class="mb-3"><?php countOngoing();?></h5>
                                        <!-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i
                                                    class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From
                                            previous</p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex text-muted">
                                    <div class="flex-shrink-0 me-3 align-self-center">
                                        <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                    <a href="index.php?addproject"><p class="mb-1 fs-4">Projects Upcoming</p></a>
                                        <h5 class="mb-3"><?php countUpcoming();?></h5>
                                        <!-- <p class="text-truncate mb-0"><span class="text-danger me-2"> 0.01% <i
                                                    class="ri-arrow-right-down-line align-bottom ms-1"></i></span> From
                                            previous</p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex text-muted">
                                    <div class="flex-shrink-0  me-3 align-self-center">
                                        <!-- <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="ri-group-line"></i>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                    <a href="index.php?addproject"><p class="mb-1 fs-4">Projects Completed</p><a>
                                        <h5 class="mb-3"><?php countCompleted();?></h5>
                                        <!-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.01% <i
                                                    class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From
                                            previous</p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                

            </div>
            <!-- container-fluid -->
        </div>
      
<?php }?>