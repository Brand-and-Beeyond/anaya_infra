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

    .gov_service_head.serviceplan {
        font-size: 28px;
        font-weight: 400;
        color: #F15B2A;
        font-family: "Allerta Stencil", system-ui;
        line-height: 30.8px;
        letter-spacing: 0.2px;
    }

    .gov_service_head.serviceplan span {
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 0.2px;
        margin-left: 4px;
    }

    .gov_service_head.subservice {
        font-size: 26px;
        font-weight: 400;
        letter-spacing: 0.2px;
        color: #F15B2A;
        font-family: "Allerta Stencil", system-ui;
    }

    .gov_service_para {
        color: #606060;
        font-weight: 400;
        font-family: "poppins";
        font-size: 18px;
        line-height: 37px;
    }

    .gov_service_headspan {
        color: #000000;
        font-size: 21px;
        font-weight: 400;
        letter-spacing: 0.3px;
        font-family: "Allerta Stencil", system-ui;
        line-height: 30.8px;
        list-style: disc !important;
        display: flex;
        align-items: center
    }

    .gov_service_headspan span {
        color: #606060;
        font-size: 19px;
        font-weight: 400;
        line-height: 40px;
        font-family: "poppins";
        margin-left: 2px;
    }
    .service_img_wrap_planning{
        position: relative;
        height:579px;
    }
    .smart_sub_service_planning.owl-carousel .owl-nav .owl-next {
        position: absolute;
        right: 30px;
        top: 45%;
        border: 1px solid #000000;
        height: 55px;
        width: 55px;
        border-radius: 50% !important;
        transition: ease all 0.5s;
    }

    .smart_sub_service_planning.owl-carousel .owl-nav .owl-prev {
        position: absolute;
        left: 30px;
        top: 45%;
        border: 1px solid #000000;
        height: 55px;
        width: 55px;
        border-radius: 50% !important;
        transition: ease all 0.5s;
    }

    .smart_sub_service_planning.owl-carousel .owl-nav .owl-next i {
        font-size: 21px;
        color: #000000;
    }
    .smart_sub_service_planning.owl-carousel .owl-nav .owl-prev i {
        font-size: 21px;
        color: #000000;
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
                            Service Planning & Designing</h2>
                        <div class="subservice-detail-content mt-25" data-aos="fade-up" data-aos-offset="220"
                            data-aos-duration="1000">
                            <p class="">At Anaya Infra Build, we specialize in comprehensive Service Planning &
                                Designing, ensuring that all mechanical, electrical, and plumbing systems are seamlessly
                                integrated into your project. Our team of experts conducts detailed equipment studies
                                and creates process flowcharts to optimize production efficiency, delivering fully
                                functional and efficient infrastructure.
                            </p>
                        </div>

                        <div class="subservice-detail-content mt-30" data-aos="fade-up" data-aos-offset="230"
                            data-aos-duration="1000">
                            <p class="">
                                Our service planning includes a meticulous approach to mechanical, electrical, and
                                plumbing (MEP) systems, ensuring they align with production and operational requirements
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
                            <h2 class="gov_service_head serviceplan" data-aos="fade-right" data-aos-offset="200"
                                data-aos-duration="1000">Mechanical, Electrical & Plumbing (MEP) Planning<span>(As per
                                    Government Norms)</span>
                            </h2>
                            <div class="row mt-3">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="160"
                                        data-aos-duration="1000">We provide tailored solutions for MEP systems to ensure
                                        your project runs smoothly, meeting all technical and safety standards.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="170"
                                data-aos-duration="1000">Mechanical :<span>Design and installation of HVAC, ventilation,
                                    and other mechanical systems.</span></li>
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="180"
                                data-aos-duration="1000">Electrical :<span>Electrical system design, ensuring energy
                                    efficiency and proper load management.</span></li>
                            <li class="gov_service_headspan py-3" data-aos="fade-right" data-aos-offset="190"
                                data-aos-duration="1000">Plumbing :<span>Plumbing design to meet water supply, drainage,
                                    and waste management needs.</span></li>


                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_head subservice py-3" data-aos="fade-right" data-aos-offset="200"
                                data-aos-duration="1000">Equipment Study & Suggestions</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">Our team conducts in-depth equipment studies to assess
                                        the operational needs of your project. We recommend the best equipment based on
                                        performance, reliability, and energy efficiency, ensuring long-term operational
                                        success.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="gov_sub_details">
                            <li class="gov_service_head subservice py-3" data-aos="fade-right" data-aos-offset="200"
                                data-aos-duration="1000">Process Flowchart Design (As Per Production Needs)</li>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p class="gov_service_para" data-aos="fade-right" data-aos-offset="200"
                                        data-aos-duration="1000">We design customized process flowcharts to optimize
                                        production processes. Our flowcharts help streamline workflows, increase
                                        efficiency, and reduce downtime, ensuring your project operates at peak
                                        performance from day one.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="sub_services-cat">
                            <div class="sub_service_inner">
                               

                                <div class="row justify-content-center mt-30">
                                    <div class="owl-carousel owl-theme smart_sub_service_planning">


                                        <div class="item">
                                            <div class="row mr0 align-items-center">
                                                <div class="col-md-12">
                                                    <div class="service_img_wrap_planning">
                                                        <img src="images/projects/touchwood_bliss.jpg"
                                                            alt="Touchwood Bliss">

                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row mr0 align-items-center">
                                                <div class="col-md-12">
                                                    <div class="service_img_wrap_planning">
                                                        <img src="images/projects/touchwood_bliss.jpg"
                                                            alt="Touchwood Bliss">

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