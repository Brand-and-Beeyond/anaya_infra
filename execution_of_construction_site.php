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

    .sub_service_head span {
        color: #F15B2A;
        font-size: 22px;
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

    .gov_sub_details {
        margin-top: 34px;
    }

    .gov_service_head {
        font-size: 28px;
        font-weight: 400;
        color: #F15B2A;
        font-family: "Allerta Stencil", system-ui;
        line-height: 30.8px;
    }

    .gov_service_headspan {
        color: #000000;
        font-size: 22px;
        font-weight: 400;
        letter-spacing: 0.3px;
        font-family: "Allerta Stencil", system-ui;
        line-height: 30.8px;
        list-style: disc !important;
    }

    .gov_service_para {
        color: #606060;
        font-weight: 400;
        font-family: "poppins";
        font-size: 18px;
        line-height: 37px;
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
                        Execution of Construction Site</h2>
                        <div class="subservice-detail-content mt-25" data-aos="fade-up" data-aos-offset="220"
                            data-aos-duration="1000">
                            <p class="">At Anaya Infra Build, we turn plans into reality with our expertise in Construction Site Execution. We manage the entire construction process with precision, ensuring that every phase—from groundwork to final touches—is executed efficiently. Our focus is on delivering high-quality results, adhering to timelines, and maintaining strict safety standards.
                            </p>
                        </div>

                        <div class="subservice-detail-content mt-30" data-aos="fade-up" data-aos-offset="230"
                            data-aos-duration="1000">
                            <p class="">
                            We provide hands-on management and execution services to ensure your construction project progresses smoothly and meets all design, safety, and regulatory standards.
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
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="150"
                                data-aos-duration="1000">Site Preparation & Groundwork</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="160"
                                        data-aos-duration="1000">We oversee the preparation of your construction site, including excavation, land clearing, and foundational work. Our experienced team ensures that the site is ready for efficient construction with all necessary infrastructure in place.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="170"
                                data-aos-duration="1000">Construction Execution</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="180"
                                        data-aos-duration="1000">Our skilled project teams manage the day-to-day activities on the construction site, ensuring every task is executed according to the project plan. We coordinate contractors, manage resources, and ensure the construction is completed to exact specifications.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="190"
                                data-aos-duration="1000">On-Site Safety & Compliance</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Safety is our top priority. We enforce strict safety protocols and ensure compliance with industry and government regulations, minimizing risks and ensuring a secure work environment for all personnel.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="210"
                                data-aos-duration="1000">Quality Control During Execution</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">Throughout the construction process, we maintain a rigorous quality control system. Our supervisors and engineers regularly inspect the work to ensure that all construction meets the highest standards of quality.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="210"
                                data-aos-duration="1000">Material & Equipment Management</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We ensure timely procurement and delivery of materials and equipment, managing their use on-site to avoid delays and ensure that the project runs smoothly.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="210"
                                data-aos-duration="1000">Timely Project Delivery</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="220"
                                        data-aos-duration="1000">We are committed to completing construction projects on time. Our well-structured execution plan and regular monitoring of progress help us achieve timely delivery without compromising quality.
                                    </p>
                                </div>
                            </div>

                        </div>
                       
                      
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="reach_to_us">
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