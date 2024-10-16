<?php include('header.php'); ?>


<main class="">
    <!--CUSTOM FOLLOW CURSOR START-->




    <?php include('slider.php'); ?>

    <section class="aboutsite">
        <div class="container-fluid">
            <div class="row justify-content-center pt-50">
                <div class="col-lg-11 col-md-10">
                    <div class="row me-0 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="info_box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1300">
                                <h3><span>250+</span></h3>
                                <p>Project Launches</p>
                            </div>
                            <div class="info_box" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1300">
                                <h3><span>45,442</span></h3>
                                <p>Units Sold</p>
                            </div>
                            <div class="info_box" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1300">
                                <h3><span>46%<span style="font-size: inherit; padding: 0 2px 0 5px;"><span
                                                style="font-size: inherit; letter-spacing: 1px;"></span></h3>
                                <p>Worth Of Inventory Sold</p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h1 class="home_abt_heading pe-4" data-aos="fade-left" data-aos-offset="200"
                            data-aos-duration="1000">Loren Ipsum</h1>
                            <p class="seo-link home_abt_txt" data-aos="fade-left" data-aos-offset="300"
                            data-aos-duration="1200">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. </p>

                            <div class="video-box" data-video-id="s2BTyC4O_1U">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/399994009.jpg?k=116498503203178453df613c4dcc6c467f7a316bd1d593c1cc15a8290bcca3b4&o=&hp=1"
                                    class="img-fluid vthumb" alt="">
                                <div class="boxhover"></div>
                                <div class="play-icon">
                                    <img src="images/play-button.png" class="img-fluid" alt="">
                                </div>
                                <div class="video-iframe">
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class=""></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <section class="why_us overflow-hidden" id="whyus">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-9">
                    <div class="row position-relative why_border align-items-center">

                        <div class="col-lg-2 col-md-2">

                            <div class="whyushead">
                                <h5 class="why_heading" data-aos="fade-right" data-aos-delay="400"
                                    data-aos-duration="1300">Why Us</h5>
                            </div>
                            <div class="why-sub">
                                <h1 class="why_sub_heading">Why Choose Us</h1>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-4">
                            <div class="row">
                                <?php global $connF;
                                $getAboutSql = "SELECT * FROM aboutus WHERE 1";
                                $getAbout = mysqli_query($connF, $getAboutSql);
                                $getAboutRow = mysqli_fetch_array($getAbout);
                                $aboutusId = $getAboutRow['aboutusId'];
                                $aboutDesc = $getAboutRow['aboutDesc'];
                                $aboutVision = $getAboutRow['aboutVision'];
                                $aboutMission = $getAboutRow['aboutMission'];
                                $aboutValues = $getAboutRow['aboutValues'];


                                // Function to split text
                                function split_text($text, $limit = 30)
                                {
                                    $words = explode(' ', $text);
                                    if (count($words) > $limit) {
                                        $first_part = implode(' ', array_slice($words, 0, $limit));
                                        $rest_part = implode(' ', array_slice($words, $limit));
                                    } else {
                                        $first_part = $text;
                                        $rest_part = '';
                                    }
                                    return array($first_part, $rest_part);
                                }

                                // Split the texts
                                list($missionFirst50, $missionRest) = split_text($aboutMission, 40);
                                list($visionFirst50, $visionRest) = split_text($aboutVision, 40);
                                list($valuesFirst50, $valuesRest) = split_text($aboutValues, 40);
                                ?>
                                <div class="col-md-12 position-relative middlemain">
                                    <div class="p-3 mb-40">
                                        <i class="fa fa-user-graduate why_icon"></i>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="vision">
                                                <p class="why_txt"> <?php echo $aboutVision ?></p>
                                            </div>
                                            <div class="tab-pane fade" id="mission">
                                                <p class="why_txt"><?php echo $aboutMission ?></p>
                                            </div>
                                            <div class="tab-pane fade" id="values">
                                                <p class="why_txt"><?php echo $aboutValues ?></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <div class="vr-line"></div> -->
                                    <div class="hr-line"></div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="vis-mis-headings">
                                <div class="tab-side">
                                    <div class="tabs d-flex align-items-center flex-column">
                                        <a href="#vision" class="tab-link mb-2 active" data-aos="fade-left"
                                            data-aos-delay="400" data-aos-duration="1300">Vision</a>
                                        <a href="#mission" class="tab-link mb-2" data-aos="fade-left"
                                            data-aos-delay="500" data-aos-duration="1300">Mission</a>
                                        <a href="#values" class="tab-link" data-aos="fade-left" data-aos-delay="600"
                                            data-aos-duration="1300">Values</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="whyus_vector">
                            <img src="images/why_us_vector.png" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_project white_pointer" style="background: #fff;">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <h4 class="section_heading" data-aos="fade-right" data-aos-offset="200"
                    data-aos-duration="1000">Ongoing Projects</h4>
                    <h2 class="new_subhead" data-aos="fade-right" data-aos-offset="300"
                    data-aos-duration="1200">Exquisite Residences and Bespoke Commercial Spaces</h2>
                </div>
            </div>
        </div>
        <div class="row mr0">


            <div class="owl-carousel owl-theme life on_projects">
                <?php
                $getProjectSql = "SELECT * FROM project WHERE projectstatusId=2";
                $getProject = mysqli_query($connF, $getProjectSql);
                while ($getProjectRow = mysqli_fetch_array($getProject)) {
                    $projectId = $getProjectRow['projectId'];
                    $projectName = $getProjectRow['projectName'];
                    $projectImg = $getProjectRow['projectImg'];
                    $projectDesc = $getProjectRow['projectDesc'];
                    $projectLoc = $getProjectRow['projectLoc'];
                    $projectCatId = $getProjectRow['projectCatId'];

                    // Fetch project category name
                    $getprojectCatNameSql = "SELECT * FROM projectcategory WHERE projectCatId='$projectCatId'";
                    $getprojectCatName = mysqli_query($connF, $getprojectCatNameSql);
                    $getprojectCatNameRow = mysqli_fetch_array($getprojectCatName);
                    $projectCatName = $getprojectCatNameRow['projectCatName'];

                    // Fetch project status
                    $projectstatusId = $getProjectRow['projectstatusId'];
                    $projectstatusSql = "SELECT * FROM projectstatus WHERE projectstatusId='$projectstatusId'";
                    $getprojectstatus = mysqli_query($connF, $projectstatusSql);
                    $getprojectstatusRow = mysqli_fetch_array($getprojectstatus);
                    $projectstatus = $getprojectstatusRow['projectstatus'];

                    // Trim project description to 2 sentences
                    $sentences = preg_split('/([.!?])\s+/', $projectDesc, 3, PREG_SPLIT_DELIM_CAPTURE);
                    if (count($sentences) >= 3) {
                        $trimmedProjectDesc = $sentences[0] . $sentences[1] . ' ' . $sentences[2] . $sentences[3];
                    } else {
                        $trimmedProjectDesc = $projectDesc;
                    }
                    ?>


                    <div class="item">
                        <div class="row mr0 align-items-center">
                            <div class="col-md-8 pd0">
                                <div class="feature_img_wrap">
                                    <img src=<?php echo 'admin/resources/project_img/' . $projectImg; ?>
                                        alt="Touchwood Bliss">
                                </div>
                            </div>
                            <div class="col-md-4 pd0">
                                <div class="project_content">
                                    <div>
                                        <!-- <figure><img class="feature_logo" src="images/dostilogo.svg"
                                            alt="Dosti 1 Mumbai"></figure> -->
                                        <div class="projct_name" >
                                            <?php echo $projectName; ?>
                                        </div>
                                        <div class="projct_dtls">
                                            <div class="project_cat mb-1">
                                                <?php echo $projectCatName; ?>
                                            </div>
                                            <div class="dtl_col projectpara">
                                                <?php echo $trimmedProjectDesc; ?>
                                            </div>
                                            <div class="dtl_col project_loc">
                                                <span><i class="fa fa-map-marker-alt"></i></span>
                                                <?php echo $projectLoc; ?>
                                            </div>
                                            <!--<div class="dtl_col aos-init" data-aos="fade-up">
                                        <span><img src="images/time.png" alt=""></span>
                                        Possession within 24 months
                                    </div>-->
                                        </div>
                                        <a href="our-work.php" class="feature-btn">View more</a>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <section class="white_pointer clientale">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <h4 class="section_heading mb-3"data-aos="fade-right" data-aos-offset="200"
                    data-aos-duration="1000">Clientele</h4>
                </div>
            </div>
        </div>
        <div class="clients">
            <div class="owl-carousel owl-theme clientele d-flex align-items-center w-80 mx-auto">
                <?php global $connF;
                $getClientSql = "SELECT * FROM clients";
                $getClient = mysqli_query($connF, $getClientSql);
                while ($getClientRow = mysqli_fetch_array($getClient)) {
                    $clientId = $getClientRow['clientId'];
                    $clientName = $getClientRow['clientName'];
                    $clientImage = $getClientRow['clientImage'];

                    ?>


                    <div class="item d-flex align-items-center">
                        <div class="client-logo-wrap">
                            <img src=<?php echo 'admin/resources/client_img/' . $clientImage; ?> class="img-fluid clientlogo" alt="">
                        </div>
                    </div>
                <?php } ?>





            </div>


        </div>
    </section>



    <section class="white_pointer px-3">

        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="ourpro mb-5">
                        <h4 class="section_heading mb-1" data-aos="fade-right" data-aos-offset="200"
                        data-aos-duration="1000">Our Projects</h4>
                        <h2 class="new_subhead" data-aos="fade-right" data-aos-offset="250"
                        data-aos-duration="1100">Exquisite Residences and Bespoke Commercial Spaces</h2>
                    </div>
                    <div class="row  mt-4 pt-3">
                        <div class="col-lg-6">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="news_loc pb-10">Hospitality</div>
                                    <h3 class="news_title pb-5">
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            Touchwood Bliss
                                        </a>
                                    </h3>
                                    <div class="news_dtl">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. </p>
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            View more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="project_img">
                                        <img src="images/ongoing_projects/farmsyde.jpg"
                                            class="img-fluid object-fit-cover prothumbnail" id="pro1" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row align-items-center ps-3">
                                <div class="col-lg-6">
                                    <div class="news_loc pb-10">Institutional</div>
                                    <h3 class="news_title pb-5">
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            Ashoka Global Acadamy
                                        </a>
                                    </h3>
                                    <div class="news_dtl">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. </p>
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            View more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="project_img second">
                                        <img src="images/ongoing_projects/ashoka-school.jpg" id="pro2"
                                            class="img-fluid object-fit-cover prothumbnail" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row align-items-center flex-row-reverse">
                                <div class="col-lg-6">
                                    <div class="news_loc pb-10">Industrial</div>
                                    <h3 class="news_title pb-5">
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            TM Cube Indware
                                        </a>
                                    </h3>
                                    <div class="news_dtl">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. </p>
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            View more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="project_img">
                                        <img src="images/ongoing_projects/tm-cube.jpg"
                                            class="img-fluid object-fit-cover prothumbnail" id="pro3" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row align-items-center flex-row-reverse">
                                <div class="col-lg-6">
                                    <div class="news_loc pb-10">Buildership</div>
                                    <h3 class="news_title pb-5">
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            24 GEMS
                                        </a>
                                    </h3>
                                    <div class="news_dtl">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. </p>
                                        <a
                                            href="https://infra.economictimes.indiatimes.com/amp/news/urban-infrastructure/from-congestion-to-connectivity-how-mumbais-infrastructure-projects-are-changing-property-dynamics/112704356">
                                            View more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="project_img">
                                        <img src="images/ongoing_projects/building.png"
                                            class="img-fluid object-fit-cover prothumbnail" id="pro4" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

            </div>
        </div>

    </section>

    <section class="testimonials py-3">
        <div class="container-fluid px-0">
            <div class="row d-flex align-items-center">
                <div class="col-md-3">
                    <div class="ms-4 ps-5">
                        <h4 class="client_heading" data-aos="fade-right" data-aos-offset="300"
                                            data-aos-duration="1000">Client <br> Testimonial</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="client-testi position-relative">
                        <div class="row mr0 g-1">
                            <div class="owl-carousel clientcar position-relative">
                                <div class="item">
                                    <h3 class="client_heading">Lorem ipsum</h3>
                                    <h5 class="client_subheading">Touchwood bliss</h5>
                                    <div class="client_para my-2">
                                        <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. "Lorem ipsum
                                            dolor sit amet, consectetur </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="client_heading">Lorem ipsum</h3>
                                    <h5 class="client_subheading">Touchwood bliss</h5>
                                    <div class="client_para my-2">
                                        <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. "Lorem ipsum
                                            dolor sit amet, consectetur </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="client_heading">Lorem ipsum</h3>
                                    <h5 class="client_subheading">Touchwood bliss</h5>
                                    <div class="client_para my-2">
                                        <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. "Lorem ipsum
                                            dolor sit amet, consectetur </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="client_heading">Lorem ipsum</h3>
                                    <h5 class="client_subheading">Touchwood bliss</h5>
                                    <div class="client_para my-2">
                                        <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. "Lorem ipsum
                                            dolor sit amet, consectetur </p>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="quote">
                            <img src="images/quotes.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div data-dsn-grid="progress-circle" data-dsn-grid-stroke="#fff" class="mytop">
        <div class="icon__fixed" data-dsn-grid="parallax">
            <i class="fas fa-angle-up"></i>
        </div>
        <span class="backtotop">Back To Top</span>
    </div>

</main>

<?php include('footer.php'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab-link'); // Select all the tab links
        const tabContents = document.querySelectorAll('.tab-pane'); // Select all tab content panes
        let currentTab = 0;
        const fadeDuration = 300; // Duration of fade-out and fade-in in milliseconds

        // Function to update the active tab and keep the scroll position intact
        function updateTabs() {
            const contentWrapper = document.querySelector('.tab-content'); // Get the content wrapper
            const scrollTop = contentWrapper.scrollTop; // Save current scroll position

            // First, start fading out the current content
            tabContents.forEach((content) => {
                content.classList.remove('fade-in'); // Ensure it's not fading in
                content.classList.add('fade-out'); // Start fading out
            });

            // Wait for the fade-out to complete before switching content
            setTimeout(() => {
                // Switch tab activation
                tabs.forEach((tab, index) => {
                    if (index === currentTab) {
                        tab.classList.add('active'); // Activate the clicked tab
                    } else {
                        tab.classList.remove('active'); // Deactivate other tabs
                    }
                });

                // Switch content visibility and start fading in the new content
                tabContents.forEach((content, index) => {
                    if (index === currentTab) {
                        content.classList.remove('fade-out'); // Remove fade-out class
                        content.classList.add('fade-in', 'show', 'active'); // Add fade-in class and show the corresponding content
                    } else {
                        content.classList.remove('show', 'active'); // Hide other content
                    }
                });

                // Restore scroll position after switching tabs
                contentWrapper.scrollTop = scrollTop;
            }, fadeDuration); // Wait for fade-out transition to complete

        }

        // Handle click event to change tabs
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default link behavior
                currentTab = index; // Update the currentTab index
                updateTabs(); // Update tabs and content
            });
        });

        // Initialize the first tab as active on page load
        updateTabs();
    });

</script>