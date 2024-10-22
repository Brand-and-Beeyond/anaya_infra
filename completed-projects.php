<?php include('header.php'); ?>

<style>
    .w-55 {
        width: 55%;
    }

    .pt-97 {
        padding-top: 97px !important;
    }
</style>

<main class="">

    <?php include('slider.php'); ?>


    <section class="about-projects py-5" id="animationSections">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row position-relative">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="pro_stat_content">
                                <h1 class="pro_heading">Lorem ipsum</h1>
                                <p class="pro-stat-text my-2 pt-3">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">

                        </div>
                        <?php include('crane.php'); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="pro_grid pt-97">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <h2 class="pro_subheading mt-5">Completed projects</h2>
                    <p class="pro_subtext my-4 pb-1 w-55">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud </p>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="row mb-0">
                                <?php
                                global $connF;
                                $getCompletedProjectSql = "SELECT * FROM project WHERE projectstatusId=3";
                                $getCompletedProject = mysqli_query($connF, $getCompletedProjectSql);
                                while ($getCompletedProjectRow = mysqli_fetch_array($getCompletedProject)) {
                                    $projectName = $getCompletedProjectRow['projectName'];
                                    $projectImg = $getCompletedProjectRow['projectImg']

                                        ?>
                                    <div class="col-lg-4 px-0 py-0">

                                        <div class="card pro-stat-card rounded-0 border-0">
                                            <div class="pro-banner layout1 animation2 position-relative">
                                                <a href="" class="rt-banner-link">
                                                    <img src=<?php echo 'admin/resources/project_img/' . $projectImg; ?>
                                                        class="img-fluid object-fit-cover" alt="">
                                                </a>
                                                <figcaption class="banner-project-tap position-absolute start-0">
                                                    <div class="banner-content"> <?php echo $projectName; ?></div>
                                                </figcaption>
                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>






                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>