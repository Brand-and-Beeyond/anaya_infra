<?php include('header.php'); ?>

<style>
    .w-55 {
        width: 55%;
    }

    .mt-20 {
        margin-top: 40px !important;
    }

    .mt-30 {
        margin-top: 60px !important;
    }

    .pt-30 {
        padding-top: 65px !important;
    }

    .fixlogo {
        height: 60px;
        display: flex;
        align-items: center;
    }
</style>

<main class="">



    <section class="banner-career ">
        <div class="container-fluid d-flex justify-content-center align-items-center h-100">
            <h1 class="career-main-head">Career</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center mt-3">
                <div class="col-lg-11">
                    <div class="text-center">
                        <h2 class="pro_heading blog mt-5 w-75 mx-auto" data-aos="fade-up" data-aos-duration="1100"
                            data-aos-offset="150">Meet the team work behind our success</h2>
                        <p class="blog_text w-50 mx-auto" data-aos="fade-up" data-aos-duration="1100"
                            data-aos-offset="150" style="margin-top:30px" ;>"Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit,"Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>

                    <div class="blog-detail-thumbnail mt-30">
                        <img src="" class="img-fluid object-fit-cover" alt="">
                    </div>
                    <div class="row justify-content-center pt-30">
                        <h3 class="pro_heading blog text-center" data-aos="fade-up" data-aos-duration="1100"
                            data-aos-offset="150">Currently Open Postions</h3>
                        <div class="col-lg-10">
                            <div class="row mt-5 g-5">
                                <?php global $connF;
                                $getCareerSql = "SELECT * FROM vacancy";
                                $getCareer = mysqli_query($connF, $getCareerSql);


                                while ($getCareerRow = mysqli_fetch_array($getCareer)) {
                                    $postName = $getCareerRow['postName'];
                                    $jobtype = $getCareerRow['jobtype'];
                                    $jobdescription = $getCareerRow['jobdescription'];

                                    ?>
                                    <div class="col-lg-12">
                                        <div class="card openingcard p-4" data-aos="fade-up" data-aos-duration="1100"
                                            data-aos-offset="150">
                                            <div class="card-body openingcardbody">
                                                <h5 class="positionheading"><?php echo $postName; ?></h5>
                                                <span class="jobtype py-3">Job Type - <?php echo $jobtype; ?></span>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <div class="roledesc">
                                                            <p class=""><?php echo $jobdescription; ?> </p>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="" class="feature-btn">Apply now</a>
                                                    </div>
                                                </div>

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

    <section class="reach_to_us mt-20">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="row">
                        <h4 class="reachus_head py-4 ms-4 ps-5" data-aos="fade-right" data-aos-duration="1100"
                            data-aos-offset="150">Any questions ? Reach us</h4>
                        <div class="col-lg-5">
                            <p class="reachus_para" data-aos="fade-right" data-aos-duration="1100"
                                data-aos-offset="160">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero
                                maiores alias, eum, neque odit mollitia laboriosam eius minima nostrum, provident
                                asperiores dolorum veritatis excepturi quaerat odio reprehenderit cum voluptas sunt iure
                                praesentium modi cumque ipsum aut eos. Adipisci, corporis aperiam!</p>
                        </div>
                    </div>
                    <div class="row supportcard_sec g-4">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="100">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/headphone.png" class="img-fluid headset" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Call us</h5>
                                        <span class="support-extra">080-882171731</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="120">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/website.png" class="img-fluid headset" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">website</h5>
                                        <span class="support-extra">www.domain.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="140">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/address.png" class="img-fluid address" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Address</h5>
                                        <span class="support-extra">xyz address</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="160">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/email.png" class="img-fluid email" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Email</h5>
                                        <span class="support-extra">info@domain.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include('footer.php'); ?>