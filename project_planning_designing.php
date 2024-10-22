<?php include('header.php'); ?>

<style>
    .w-55 {
        width: 55%;
    }

    .services_bg {
        background-color: #E3DCD6;
        min-height: 460px;
    }

    .mt-25 {
        margin-top: 25px !important;
    }

    .my-30 {
        margin: 60px 0;
    }

    .subservice-detail-content p {
        color: 21px;
        line-height: 34px;
        font-size: 19px;
        font-family: "poppins";
    }

    .tabs {
        display: flex;
        gap: 25px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .tabs .sub_service_tab {
        min-width: 250px;
        height: 58px;
        cursor: pointer;
        background-color: #ffffff;
        color: #F15B2A;
        font-family: "Allerta Stencil", system-ui;
        font-size: 20px;
        line-height: 28px;
        font-weight: 400;
        box-shadow: 0px 2px 8px 4px #ABABAB40;
        border-radius: 20px;
        text-align: center;
    }

    .tabs .sub_service_tab.active,
    .tabs .sub_service_tab:hover {
        background-color: #F15B2A;
        color: #ffffff;
        box-shadow: 0px 2px 8px 4px #ABABAB40;
    }

    .tab-content {
        padding: 10px 20px;
        margin-top: 40px;
    }

    .hidden {
        display: none;
    }

    .sub_service_head {
        color: #F15B2A;
        font-size: 36px;
        font-family: "Allerta Stencil", system-ui;
        line-height: 39.6px;
        font-weight: 400;
        padding: 15px 0;
        letter-spacing: 0.3px;
    }

    .sub_service_subhead {
        color: #4E4E4E;
        font-size: 21px;
        font-family: "poppins";
        line-height: 24.2px;
        font-weight: 400;
    }

    .sub_service_desc {
        color: #000000;
        font-size: 14px;
        font-family: "poppins";
        line-height: 21.7px;
        font-weight: 400;

    }

    .sub_services-cat {
        padding: 40px 0;
    }

    .sub_services-cat .category {
        font-family: "Allerta Stencil", system-ui;
        font-size: 28px;
        line-height: 30px;
        font-weight: 400;
        color: #F15B2A;
        list-style: disc !important;
    }

    .location {
        color: #606060;
        font-family: "poppins";
        font-size: 20px;
        font-weight: 400;
        line-height: 31px;
    }

    .service_img_wrap {
        height: 410px;
        width: 100%;
    }

    .smart_sub_service.owl-carousel .owl-nav .owl-next {
        position: absolute;
        right: 23px;
        top: 45%;
        background: #ffffff !important;
        border: 1px solid #000000;
        height: 55px;
        width: 55px;
        border-radius: 50% !important;
        transition: ease all 0.5s;
    }

    .smart_sub_service.owl-carousel .owl-nav .owl-prev {
        display: none;
    }

    .smart_sub_service.owl-carousel .owl-nav .owl-next i {
        font-size: 21px;
        color: #000000;
    }

    .sub_service_inner {
        margin-top: 65px;
    }
</style>

<main class="">

    <?php include('slider.php'); ?>

    <style>

    </style>

    <section class="services_bg d-flex align-items-center">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <h2 class="pro_heading blog" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000">
                            Project Planning & Designing</h2>
                        <div class="subservice-detail-content mt-25" data-aos="fade-up" data-aos-offset="220"
                            data-aos-duration="1000">
                            <p class="">At Anaya Infra Build, we specialize in delivering innovative and
                                reliable infrastructure solutions. We ensure that every project meets stringent
                                government norms and regulations, providing our clients with legally compliant designs
                                and efficient execution. From industrial to institutional, hospitality, and residential
                                projects, our expert team ensures excellence in planning, design, and management.
                            </p>
                        </div>

                        <div class="subservice-detail-content mt-30" data-aos="fade-up" data-aos-offset="230"
                            data-aos-duration="1000">
                            <p class="">
                                We offer tailored planning and design services that adhere to all relevant government
                                regulations and industry standards, ensuring that your project is both visionary and
                                compliant.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub_services py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div>
                            <div class="tab-container">
                                <!--  Tab Buttons  -->
                                <div class="tabs">
                                    <button class="sub_service_tab tab active" data-aos="fade-up" data-aos-offset="200"
                                        data-aos-duration="1000" data-aos-delay="150">Industrial</button>
                                    <button class="sub_service_tab tab" data-aos="fade-up" data-aos-offset="220"
                                        data-aos-duration="1000" data-aos-delay="250">Institutional</button>
                                    <button class="sub_service_tab tab" data-aos="fade-up" data-aos-offset="240"
                                        data-aos-duration="1000" data-aos-delay="350">Hospitality</button>
                                    <button class="sub_service_tab tab" data-aos="fade-up" data-aos-offset="260"
                                        data-aos-duration="1000" data-aos-delay="450">Residential</button>
                                    <button class="sub_service_tab tab" data-aos="fade-up" data-aos-offset="270"
                                        data-aos-duration="1000" data-aos-delay="500">Agricultural</button>
                                </div>
                                <!-- Tab Content  -->
                                <div class="tab-content">
                                    <h2 class="sub_service_head" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Industrial Development</h2>
                                    <p class="sub_service_subhead my-2" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We design and develop industry-specific
                                        infrastructure for:</p>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="sub_service_desc mt-4" data-aos="fade-right" data-aos-offset="240"
                                                data-aos-duration="1000">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>


                                    <div class="sub_services-cat">
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Warehousing & Cold Storage</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/tm-cube.jpg" alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> TM
                                                                            cube
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/gauri_cold_storage.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            Gauri agro exports
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/ashoka.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            Arihant
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Winery Development</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/nashik_aroma.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Nashik aroma
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/ashoka.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            Tilak nagar
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Chemical Industry</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/nashik_aroma.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Nashik aroma
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/ashoka.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                           Tilak nagar
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Pharmaceutical Facilities</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/touchwood_bliss.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> NSK aroma
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/ashoka.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            IMQ cube
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Mechanical</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/touchwood_bliss.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> NSK aroma
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/projects/ashoka.jpg"
                                                                        alt="Touchwood Bliss">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            IMQ cube
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content hidden">
                                    <h2 class="sub_service_head" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Institutional Development</h2>
                                    <p class="sub_service_subhead my-2" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We design and develop industry-specific
                                        infrastructure for:</p>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="sub_service_desc mt-4" data-aos="fade-right" data-aos-offset="240"
                                                data-aos-duration="1000">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                    <div class="sub_services-cat">
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Educational</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/ashoka_global.jpg"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Ashoka global Academy
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/gauri_cold_storage.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            Gauri agro exports
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Hospital & institute </li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/ashoka_medicover.jpg"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Ashoka medicover
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Cooperative bank </li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/namco_bank_inner.jpg"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Namco bank
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-content hidden">
                                    <h2 class="sub_service_head" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Hospitality</h2>
                                    <p class="sub_service_subhead my-2" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We design and develop industry-specific
                                        infrastructure for:</p>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="sub_service_desc mt-4" data-aos="fade-right" data-aos-offset="240"
                                                data-aos-duration="1000">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                    <div class="sub_services-cat">
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Resorts</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/bliss_phase1.jpg"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Touchwood bliss -
                                                                            phase
                                                                            1
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/bliss_phase2.jpg"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            Touchwood bliss -phase 2
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub_service_inner">
                                            <li class="category" data-aos="fade-right" data-aos-offset="200"
                                                data-aos-duration="1000">Lawns</li>

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/geeta_lawns.jpg"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Geeta lawns
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="tab-content hidden">
                                    <h2 class="sub_service_head" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Residential</h2>
                                    <p class="sub_service_subhead my-2" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We design and develop industry-specific
                                        infrastructure for:</p>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="sub_service_desc mt-4" data-aos="fade-right" data-aos-offset="240"
                                                data-aos-duration="1000">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>


                                    <div class="sub_services-cat">
                                        <div class="sub_service_inner">
                                            <!-- <li class="category" data-aos="fade-right" data-aos-offset="200"
                                            data-aos-duration="1000"></li> -->

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/24gems.png" alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> 24 Gems
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/anubhav_bunglow.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                            Anubhav row bunglow
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <div class="tab-content hidden">
                                    <h2 class="sub_service_head" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Agricultural</h2>
                                    <p class="sub_service_subhead my-2" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We design and develop industry-specific
                                        infrastructure for:</p>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="sub_service_desc mt-4" data-aos="fade-right" data-aos-offset="240"
                                                data-aos-duration="1000">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>


                                    <div class="sub_services-cat">
                                        <div class="sub_service_inner">
                                            <!-- <li class="category" data-aos="fade-right" data-aos-offset="200"
                                            data-aos-duration="1000"></li> -->

                                            <div class="row justify-content-center mt-30">
                                                <div class="owl-carousel owl-theme smart_sub_service">


                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7 pd0">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/24gems.png" alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name"> Aaosai farmer producer company limited 
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>
                                                                            <span
                                                                                class="location">Nashik,Maharashtra</span>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/anubhav_bunglow.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                        Kissan CSC health farmer producer company limited
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/anubhav_bunglow.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                        Rajmata farmer producer company limited
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/anubhav_bunglow.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                      Girna khore farmer producer company limited
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/anubhav_bunglow.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                        Tuljai agro farmer producer company limited
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row mr0 align-items-center">
                                                            <div class="col-md-7">
                                                                <div class="service_img_wrap">
                                                                    <img src="images/smart_services/anubhav_bunglow.png"
                                                                        alt="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 pd0">
                                                                <div class="blog_content">
                                                                    <div>

                                                                        <div class="projct_name ">
                                                                        Yashodai farmer producer company limited 
                                                                        </div>
                                                                        <div class="projct_dtls">
                                                                            <div class="project_cat mb-1">
                                                                                Lorem ipsum dolor sit
                                                                            </div>
                                                                            <div class="dtl_col aos-init">
                                                                                "Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit, sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua. sed do eiusmod
                                                                                tempor incididunt ut labore et dolore
                                                                                magna aliqua.
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>



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
<script>
    const tabs = document.querySelectorAll(".tab");
    const tabContent = document.querySelectorAll(".tab-content");

    tabs.forEach((tab, i) => {
        tab.addEventListener("click", function () {
            tabs.forEach(tab => tab.classList.remove("active"));
            this.classList.add("active");
            tabContent.forEach(content => content.classList.add("hidden"));
            tabContent[i].classList.remove("hidden");
        });
    });
</script>