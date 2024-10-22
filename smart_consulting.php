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

    .smart-text {
        color: #000000;
        line-height: 32.81px;
        font-size: 28px;
        font-family: "poppins";
        font-weight: 500;
        margin-left: 10px;
    }

    .timeline:before {
        content: '';
        position: absolute;
        height: 100%;
        left: 50%;
        width: 2px;
        top: -20px;
        background: linear-gradient(180deg, #191970 0%, #6969B2 20.4%, #C0C0C0 100%);
        z-index: 1;
    }

    .circle-at-end {
        content: '';
        position: absolute;
        bottom: 0px;
        left: calc(50% - 8.5px);
        width: 20px;
        height: 20px;
        background-color: #D9D9D9;
        border-radius: 50%;
        z-index: 2;
        transition: background-color 0.5s ease;
    }

    .timeline {
        position: relative;
        margin: 120px auto;
        width: 1000px;
        padding: 50px 0;
    }

    .active-scroll-line {
        position: absolute;
        left: 50%;
        width: 1.6px;
        height: 10px;
        /* Fixed height */
        background: linear-gradient(180deg, #191970 0%, #6969B2 20.4%, #C0C0C0 100%);
        z-index: 2;
        /* On top of the base line */
        transform: translateX(-50%);
        visibility: hidden;
        /* Initially hidden */
        transition: all 0.5s;
    }

    .timeline ul {
        margin: 0;
        padding: 0;
    }

    .timeline ul li:nth-child(odd):before {
        content: '';
        position: absolute;
        width: 18px;
        height: 18px;
        background: #D9D9D9;
        /* Default color */
        border-radius: 50%;
        left: 0%;
        transform: translateX(-50%);
        top: 44%;
        z-index: 1;
    }

    .timeline ul li:nth-child(even):before {
        content: '';
        position: absolute;
        width: 18px;
        height: 18px;
        background: #D9D9D9;
        /* Default color */
        border-radius: 50%;
        right: 0%;
        transform: translateX(50%);
        top: 44%;
        z-index: 1;
    }

    /* Active state for circles */
    .timeline ul li:nth-child(odd).active:before {
        background: #191970;
        /* Dark color for active state */
        animation: bounceInLeft 0.5s forwards;
    }

    .timeline ul li:nth-child(even).active:before {
        background: #191970;
        /* Dark color for active state */
        animation: bounceInRight 0.5s forwards;
    }

    .timeline ul li {
        list-style: none;
        box-sizing: border-box;
        line-height: normal;
        position: relative;
        width: 50%;
        padding: 38px 42px;
    }

    .smart_services {
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 0.5px;
        font-family: "Roboto", sans-serif;
        line-height: 21.09px;
    }

    .smart_services_para {
        color: #505050;
        font-size: 14px;
        font-weight: 500;
        line-height: 21px;
        font-family: "poppins";
    }

    .timeline ul li:nth-child(odd) {
        float: right;
        text-align: start;
        clear: both;
    }

    .timeline ul li:nth-child(even) {
        float: left;
        text-align: right;
        clear: both;
    }

    .left_content {
        padding-bottom: 20px;
    }

    .smart_service_numbering {
        background-color: #191970;
        width: 48px;
        height: 48px;
        text-align: center;
        line-height: 48px;
        border-radius: 50px;
        color: white;
        font-family: "Allerta Stencil", system-ui;
        font-size: 30px;
        font-weight: 400;
    }

    .smart_service_sublink {
        color: #191970;
        font-family: "poppins";
        font-weight: 400;
        font-size: 14px;
        line-height: 21.7px;
        padding-top: 12px;
        letter-spacing: 0.3px;
        text-decoration: underline !important;
    }

    .smart-main-head {
        color: #ffffff;
        font-family: "Roboto", sans-serif;
        font-size: 60px;
        line-height: 72px;
        animation: bounceInDown 0.8s 1 linear;
    }

    @keyframes bounceInDown {
        0% {
            opacity: 0;
            transform: translateY(-500px);
        }

        60% {
            opacity: 1;
            transform: translateY(30px);
        }

        80% {
            transform: translateY(-20px);
        }

        90% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .smart_service_heading {
        color: #191970;
        font-family: "Allerta Stencil", system-ui;
        font-size: 48px;
        font-weight: 400;
        line-height: 61.36px;
    }

    .service_para {
        color: #4C4C4C;
        font-family: "poppins";
        font-weight: 400;
        font-size: 23px;
        line-height: 40.31px;
    }

    @keyframes bounceInLeft {
        0% {
            transform: translateX(-50%) scale(0);
            /* Scale from center */
        }

        50% {
            transform: translateX(-50%) scale(1.2);
            /* Scale from center */
        }

        100% {
            transform: translateX(-50%) scale(1);
            /* Scale from center */
        }
    }

    @keyframes bounceInRight {
        0% {
            transform: translateX(50%) scale(0);
            /* Scale from center */
        }

        50% {
            transform: translateX(50%) scale(1.2);
            /* Scale from center */
        }

        100% {
            transform: translateX(50%) scale(1);
            /* Scale from center */
        }
    }



    @media (max-width: 1000px) {

        .timeline {
            width: 100%;
        }
    }

    @media (max-width: 767px) {
        .timeline {
            width: 100%;
        }

        .timeline:before {
            left: 20px;
        }

        .timeline ul li:nth-child(odd),
        .timeline ul li:nth-child(even) {
            width: 100%;
            text-align: left;
            padding-left: 50px;
        }

        .timeline ul li:nth-child(odd):before {
            top: -18px;
            left: 16px;

        }

        .timeline ul li:nth-child(even):before {
            top: -18px;
            left: 16px;
        }




    }
</style>

<main class="">



    <section class="banner-smart-consulting">
        <div class="container-fluid d-flex justify-content-center align-items-center h-100">
            <h1 class="smart-main-head">Design. Develop. Deliver. SMARTly.</h1>
        </div>
    </section>

    <section class="smart_about_us">
        <div class="container-fluid">
            <div class="row justify-content-center mt-5 pt-5">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <h1 class="smart_about_text text-end"data-aos="fade-right" data-aos-duration="1000"
                            data-aos-offset="200">
                                <span class="about">About</span>
                                <span class="us d-block">Us</span>
                            </h1>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="about_para"data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200">
                                <p>SMART Industrial Consultant by Anaya Infra Build
                                    Delivering innovative and efficient solutions in real estate and infrastructure. Our
                                    expertise spans across project planning, government liaison, strategic partnerships,
                                    financial advisories, and comprehensive project management, from design to
                                    execution.
                                </p>
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
                    <div class="row position-relative why_border_smart align-items-center">

                        <div class="col-lg-2 col-md-2">

                            <div class="whyushead">
                                <h5 class="why_heading smart" data-aos="fade-right" data-aos-delay="400"
                                    data-aos-duration="1300">Why Us</h5>
                            </div>
                            <div class="why-sub">
                                <h1 class="why_sub_heading">Why Choose Us</h1>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-4">
                            <div class="row">

                                <div class="col-md-12 position-relative middlemain smart">
                                    <div class="p-3 mb-40">
                                        <i class="fa fa-user-graduate why_icon smart"></i>
                                        <div class="tab-content smart">
                                            <div class="tab-pane smart fade show active" id="efficient">
                                                <p class="why_txt">Brief text for <span class="text-dark fw-bold">Tab
                                                        1</span> goes here. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Suscipit temporibus alias aut nemo laborum, nulla
                                                    totam expedita sapiente ipsa. Nulla molestiae fugit obcaecati optio
                                                    quibusdam aut autem dolor, rerum quis? Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Quaerat aut id doloribus magni
                                                    placeat, natus tenetur voluptatibus nesciunt odit a!</p>
                                            </div>
                                            <div class="tab-pane smart fade" id="innovative">
                                                <p class="why_txt">Brief text for <span class="text-dark fw-bold">Tab
                                                        2</span> goes here. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Suscipit temporibus alias aut nemo laborum, nulla
                                                    totam expedita sapiente ipsa. Nulla molestiae fugit obcaecati optio
                                                    quibusdam aut autem dolor, rerum quis? Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Quaerat aut id doloribus magni
                                                    placeat, natus tenetur voluptatibus nesciunt odit a! Lorem ipsum
                                                    dolor sit amet consectetur adipisicing elit. Dolorem molestiae est
                                                    reiciendis cumque voluptatum! Itaque repudiandae fuga labore nobis
                                                    similique?</p>
                                            </div>
                                            <div class="tab-pane smart fade" id="strategic">
                                                <p class="why_txt">Brief text for <span class="text-dark fw-bold">Tab
                                                        3</span> goes here. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Suscipit temporibus alias aut nemo laborum, nulla
                                                    totam expedita sapiente ipsa. Nulla molestiae fugit obcaecati optio
                                                    quibusdam aut autem dolor, rerum quis? Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Quaerat aut id doloribus magni
                                                    placeat, natus tenetur voluptatibus nesciunt odit a!</p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <div class="vr-line"></div> -->
                                    <div class="hr-line smart"></div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="vis-mis-headings smart">
                                <div class="tab-side">
                                    <div class="tabs d-flex align-items-center flex-column">
                                        <a href="#efficient" class="tab-link smart mb-2 active" data-aos="fade-left"
                                            data-aos-delay="400" data-aos-duration="1300">Efficient Execution</a>
                                        <a href="#innovative" class="tab-link smart mb-2" data-aos="fade-left"
                                            data-aos-delay="500" data-aos-duration="1300">Innovative Solutions</a>
                                        <a href="#strategic" class="tab-link smart" data-aos="fade-left"
                                            data-aos-delay="600" data-aos-duration="1300">Strategic Expertise</a>
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

    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <h3 class="smart_service_heading py-2" data-aos="fade-right" data-aos-offset="200"
                        data-aos-duration="1000">Our Services</h3>
                    <div class="service_para mt-1" data-aos="fade-right" data-aos-offset="230" data-aos-duration="1000">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline">
            <div class="active-scroll-line"></div>
            <div class="circle-at-end"></div>
            <ul>
                <li>
                    <div class="right_content" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">1</div>
                        <h4 class="smart_services py-3">Project Planning & Designing</h4>
                        <p class="smart_services_para">Transforming ideas into well-planned, innovative designs.
                        </p>
                        <a href="project_planning_designing.php" class="smart_service_sublink">View more</a>
                    </div>

                </li>
                <li>
                    <div class="right_content" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">2</div>
                        <h4 class="smart_services py-3">Government Authority Compliance</h4>
                        <p class="smart_services_para">Ensuring compliance and seamless approvals with government
                            authorities.
                        </p>
                        <a href="goverment_authority.php" class="smart_service_sublink">View more</a>
                    </div>
                    <div class="left_content">

                    </div>
                </li>
                <li>
                    <div class="right_content" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">3</div>
                        <h4 class="smart_services py-3">Strategic Partner with Financial Advisory</h4>
                        <p class="smart_services_para">Empowering growth with strategic partnerships and expert
                            financial guidance.
                        </p>
                        <a href="strategic_partner_with_financial_advisory.php" class="smart_service_sublink">View
                            more</a>
                    </div>
                    <div class="left_content">

                    </div>
                </li>
                <li>
                    <div class="right_content" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">4</div>
                        <h4 class="smart_services py-3">Service Planning & Designing</h4>
                        <p class="smart_services_para">Crafting tailored service plans with innovative design solutions.
                        </p>
                        <a href="service_planning_designing.php" class="smart_service_sublink">View more</a>
                    </div>
                    <div class="left_content">

                    </div>
                </li>
                <li>
                    <div class="right_content" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">5</div>
                        <h4 class="smart_services py-3">Project Management</h4>
                        <p class="smart_services_para">Driving projects from concept to completion with precision and
                            efficiency.
                        </p>
                        <a href="project_management_for_construction.php" class="smart_service_sublink">View more</a>
                    </div>
                    <div class="left_content">

                    </div>
                </li>
                <li>
                    <div class="right_content" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">6</div>
                        <h4 class="smart_services py-3">Execution</h4>
                        <p class="smart_services_para">Delivering flawless execution with a commitment to excellence.
                        </p>
                        <a href="execution_of_construction_site.php" class="smart_service_sublink">View more</a>
                    </div>
                    <div class="left_content">

                    </div>
                </li>
                <li>
                    <div class="right_content" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="smart_service_numbering mb-2 d-inline-block">7</div>
                        <h4 class="smart_services py-3">Branding</h4>
                        <p class="smart_services_para">Building impactful brands that inspire and connect.
                        </p>
                        <a href="" class="smart_service_sublink">View more</a>
                    </div>
                    <div class="left_content">

                    </div>
                </li>

                <div style="clear:both;"></div>
            </ul>
        </div>
    </section>


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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const listItems = document.querySelectorAll('.timeline ul li'); // Select all list items

        function updateCircleColors() {
            const windowHeight = window.innerHeight;

            listItems.forEach((item) => {
                const rect = item.getBoundingClientRect();

                // Check if the item is in the viewport
                if (rect.top >= 0 && rect.bottom <= windowHeight) {
                    // Add the active class if it's in view
                    if (!item.classList.contains('active')) {
                        item.classList.add('active'); // Add active class to trigger animation
                    }
                } else {
                    // Remove the active class if it's out of view
                    item.classList.remove('active');
                }
            });
        }

        // Update circle colors on scroll
        window.addEventListener('scroll', updateCircleColors);

        // Initial call to set the right colors on page load
        updateCircleColors();
    });




</script>