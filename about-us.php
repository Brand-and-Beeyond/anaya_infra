<?php include('header.php'); ?>
<style>
    .read-more {
        color: #F15B2A !important;
        letter-spacing: 0.6px;
        text-decoration: underline !important;
    }

    .more-link {
        color: #F15B2A;
        font-size: 19px;
        font-weight: 400;
        font-family: "poppins";
        padding-left: 10px;
        margin-top: 10px;
    }

    .fixlogo {
        height: 60px;
        display: flex;
        align-items: center;
    }

    @media(max-width:700px) {
        .more-link {
            font-size: 12px;
            font-weight: 400;
            font-family: "poppins";
            padding-left: 10px;
            margin-top: 10px;
        }
    }
</style>
<?php global $connF;
$getAboutSql = "SELECT * FROM aboutus WHERE 1";
$getAbout = mysqli_query($connF, $getAboutSql);
$getAboutRow = mysqli_fetch_array($getAbout);
$aboutusId = $getAboutRow['aboutusId'];
$aboutDesc = $getAboutRow['aboutDesc'];
$aboutVision = $getAboutRow['aboutVision'];
$aboutMission = $getAboutRow['aboutMission'];
$aboutValues = $getAboutRow['aboutValues'];

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
list($missionFirst50, $missionRest) = split_text($aboutMission, 30);
list($visionFirst50, $visionRest) = split_text($aboutVision, 30);
list($valuesFirst50, $valuesRest) = split_text($aboutValues, 30);
?>

<main class="">

    <?php include('slider.php'); ?>

    <section class="about_us">
        <div class="container-fluid">
            <div class="row justify-content-center mt-5 pt-5">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <h1 class="about_text text-end d-none d-sm-none d-md-block" data-aos="fade-right"
                                data-aos-duration="1000" data-aos-offset="200">
                                <span class="about">About</span>
                                <span class="us">Us</span>
                            </h1>
                            <h2 class="mob-head text-center d-block d-sm-block d-md-none">about <span
                                    class="anaya-mob-span">anaya</span></h2>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="about_para" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200">
                                <?php
                                // Assuming the aboutDesc has multiple paragraphs separated by newlines
                                $paragraphs = explode("\n", nl2br($aboutDesc));
                                foreach ($paragraphs as $paragraph) {
                                    if (!empty($paragraph)) {
                                        echo "<p>$paragraph</p>";
                                    }
                                }
                                ?>
                                <button id="toggleBtn" class="more-link">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="abt_vismissvalues d-none d-sm-none d-md-block">
        <div class="container-fluid">
            <div class="row justify-content-center vismisrow position-relative">
                <div class="col-lg-9">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-4 col-4">
                            <div class="card vscard border-0 bg-transparent" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="1600" data-aos-offset="150">
                                <div
                                    class="card-body innerbody d-flex justify-content-center align-items-center flex-column">
                                    <div class="icon-box d-flex justify-content-center align-items-center">
                                        <img src="images/mission.png" class="img-fluid missionicon" alt="">
                                    </div>
                                    <div class="vs-content text-center">
                                        <h4 class="vs-head">Mission</h4>
                                        <p class="vs-para py-3"> <?php echo $missionFirst50; ?>
                                            <?php if ($missionRest != '') { ?>
                                                <span class="moretext"
                                                    style="display: none;"><?php echo ' ' . $missionRest; ?></span>
                                                <a href="javascript:void(0);" class="read-more d-block">Read more</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <div class="card vscard border-0 bg-transparent" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="1600" data-aos-offset="170">
                                <div
                                    class="card-body innerbody d-flex justify-content-center align-items-center flex-column">
                                    <div class="icon-box d-flex justify-content-center align-items-center">
                                        <img src="images/vision.png" class="img-fluid visionicon" alt="">
                                    </div>
                                    <div class="vs-content text-center">
                                        <h4 class="vs-head">Vision</h4>
                                        <p class="vs-para py-3"> <?php echo $visionFirst50; ?>
                                            <?php if ($visionRest != '') { ?>
                                                <span class="moretext"
                                                    style="display: none;"><?php echo ' ' . $visionRest; ?></span>
                                                <a href="javascript:void(0);" class="read-more d-block"> Read More</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <div class="card vscard border-0 bg-transparent" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="1600" data-aos-offset="190">
                                <div
                                    class="card-body innerbody d-flex justify-content-center align-items-center flex-column">
                                    <div class="icon-box d-flex justify-content-center align-items-center">
                                        <img src="images/values.png" class="img-fluid valuesicon" alt="">
                                    </div>
                                    <div class="vs-content text-center">
                                        <h4 class="vs-head">Values</h4>
                                        <p class="vs-para py-3"> <?php echo $valuesFirst50; ?>
                                            <?php if ($valuesRest != '') { ?>
                                                <span class="moretext"
                                                    style="display: none;"><?php echo ' ' . $valuesRest; ?></span>
                                                <a href="javascript:void(0);" class="read-more d-block"> Read More</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="abt_vismissvalues d-block d-sm-block d-md-none">
        <div class="container-fluid">
            <div class="row justify-content-center vismisrow position-relative">
                <div class="col-lg-9">
                    <div class="row g-4">
                        <div class="col-sm-4 col-4">
                            <div class="card vscard border-0 bg-transparent" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="1600" data-aos-offset="150">
                                <div
                                    class="card-body innerbody d-flex justify-content-center align-items-center flex-column">
                                    <div class="icon-box d-flex justify-content-center align-items-center">
                                        <img src="images/mission.png" class="img-fluid missionicon" alt="">
                                    </div>
                                    <div class="vs-content text-center">
                                        <h4 class="vs-head">Mission</h4>
                                        <p class="vs-para py-3"> <?php echo $missionFirst50; ?>
                                            <?php if ($missionRest != '') { ?>
                                                <span class="moretext"
                                                    style="display: none;"><?php echo ' ' . $missionRest; ?></span>
                                                <a href="javascript:void(0);" class="read-more d-block">Read more</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-4">
                            <div class="card vscard border-0 bg-transparent" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="1600" data-aos-offset="170">
                                <div
                                    class="card-body innerbody d-flex justify-content-center align-items-center flex-column">
                                    <div class="icon-box d-flex justify-content-center align-items-center">
                                        <img src="images/vision.png" class="img-fluid visionicon" alt="">
                                    </div>
                                    <div class="vs-content text-center">
                                        <h4 class="vs-head">Vision</h4>
                                        <p class="vs-para py-3"> <?php echo $visionFirst50; ?>
                                            <?php if ($visionRest != '') { ?>
                                                <span class="moretext"
                                                    style="display: none;"><?php echo ' ' . $visionRest; ?></span>
                                                <a href="javascript:void(0);" class="read-more d-block"> Read More</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-4">
                            <div class="card vscard border-0 bg-transparent" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="1600" data-aos-offset="190">
                                <div
                                    class="card-body innerbody d-flex justify-content-center align-items-center flex-column">
                                    <div class="icon-box d-flex justify-content-center align-items-center">
                                        <img src="images/values.png" class="img-fluid valuesicon" alt="">
                                    </div>
                                    <div class="vs-content text-center">
                                        <h4 class="vs-head">Values</h4>
                                        <p class="vs-para py-3"> <?php echo $valuesFirst50; ?>
                                            <?php if ($valuesRest != '') { ?>
                                                <span class="moretext"
                                                    style="display: none;"><?php echo ' ' . $valuesRest; ?></span>
                                                <a href="javascript:void(0);" class="read-more d-block"> Read More</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="orange_sec position-relative" style="cursor:pointer !important">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cd-horizontal-timeline">
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events">
                                <ol>
                                    <li><a href="#0" data-date="01/01/2005" class="selected"></a></li>
                                    <li><a href="#0" data-date="01/01/2007"></a></li>
                                    <li><a href="#0" data-date="01/01/2009"></a></li>
                                    <li><a href="#0" data-date="01/01/2012"></a></li>
                                    <li><a href="#0" data-date="01/01/2013"></a></li>
                                    <li><a href="#0" data-date="01/01/2014"></a></li>
                                    <li><a href="#0" data-date="01/01/2015"></a></li>
                                    <li><a href="#0" data-date="01/01/2016"></a></li>
                                </ol>

                                <span class="filling-line" aria-hidden="true"></span>
                            </div> <!-- .events -->
                        </div> <!-- .events-wrapper -->

                        <ul class="cd-timeline-navigation">
                            <li><a href="#0" class="prev inactive"><i class="fas fa-chevron-left"></i></a></li>
                            <li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
                        </ul> <!-- .cd-timeline-navigation -->
                    </div> <!-- .timeline -->

                    <div class="events-content">
                        <ol>
                            <li class="selected" data-date="01/01/2005">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Touchwood Bliss</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>

                            </li>

                            <li data-date="01/01/2007">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Ashoka medicover</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>

                            <li data-date="01/01/2009">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Namco bank</h2>
                                    <h4 class="event-category mb-4">Banking infra</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>

                            <li data-date="01/01/2012">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Ashoka medicover</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>

                            <li data-date="01/01/2013">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Ashoka medicover</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>

                            <li data-date="01/01/2014">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Ashoka medicover</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>

                            <li data-date="01/01/2015">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Ashoka medicover</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>

                            <li data-date="01/01/2016">
                                <div class="events-info">
                                    <h2 class="event-head my-4">Ashoka medicover</h2>
                                    <h4 class="event-category mb-4">Hospitality project</h4>
                                    <span class="event-date d-block mb-4">June 21st, 2018</span>
                                    <p class="event-desc">
                                        AMA issues CSAPH 2-A-16, “Human Environmental Effects of LED Community
                                        Lighting.”
                                    </p>
                                </div>
                            </li>


                        </ol>
                    </div> <!-- .events-content -->
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
                        <div class="col-lg-3 col-sm-3 col-3">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="100">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/headphone.png" class="img-fluid headset" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Call us</h5>
                                        <span class="support-extra d-none d-sm-none d-md-block">080-882171731</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-3">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="120">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/website.png" class="img-fluid headset" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Whatsapp</h5>
                                        <span class="support-extra d-none d-sm-none d-md-block">www.domain.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-3">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="140">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/address.png" class="img-fluid address" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Address</h5>
                                        <span class="support-extra d-none d-sm-none d-md-block">xyz address</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-3">
                            <div class="card supportcard border-0 bg-white" data-aos="zoom-in-up"
                                data-aos-duration="900" data-aos-offset="160">
                                <div class="card-body innerbody d-flex flex-column justify-content- align-items-center">
                                    <div class="fixlogo">
                                        <img src="images/email.png" class="img-fluid email" alt="">
                                    </div>

                                    <div class="support-content text-center">
                                        <h5 class="support-text my-3">Email</h5>
                                        <span class="support-extra d-none d-sm-none d-md-block">info@domain.com</span>
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
    jQuery(document).ready(function ($) {
        var timelines = $('.cd-horizontal-timeline'),
            eventsMinDistance = 80;

        (timelines.length > 0) && initTimeline(timelines);

        function initTimeline(timelines) {
            timelines.each(function () {
                var timeline = $(this),
                    timelineComponents = {};
                //cache timeline components 
                timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
                timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
                timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
                timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
                timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
                timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
                timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
                timelineComponents['eventsContent'] = timeline.children('.events-content');

                //assign a left postion to the single events along the timeline
                setDatePosition(timelineComponents, eventsMinDistance);
                //assign a width to the timeline
                var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
                //the timeline has been initialize - show it
                timeline.addClass('loaded');

                //detect click on the next arrow
                timelineComponents['timelineNavigation'].on('click', '.next', function (event) {
                    event.preventDefault();
                    updateSlide(timelineComponents, timelineTotWidth, 'next');
                });
                //detect click on the prev arrow
                timelineComponents['timelineNavigation'].on('click', '.prev', function (event) {
                    event.preventDefault();
                    updateSlide(timelineComponents, timelineTotWidth, 'prev');
                });
                //detect click on the a single event - show new event content
                timelineComponents['eventsWrapper'].on('click', 'a', function (event) {
                    event.preventDefault();
                    timelineComponents['timelineEvents'].removeClass('selected');
                    $(this).addClass('selected');
                    updateOlderEvents($(this));
                    updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
                    updateVisibleContent($(this), timelineComponents['eventsContent']);
                });

                //on swipe, show next/prev event content
                timelineComponents['eventsContent'].on('swipeleft', function () {
                    var mq = checkMQ();
                    (mq == 'mobile') && showNewContent(timelineComponents, timelineTotWidth, 'next');
                });
                timelineComponents['eventsContent'].on('swiperight', function () {
                    var mq = checkMQ();
                    (mq == 'mobile') && showNewContent(timelineComponents, timelineTotWidth, 'prev');
                });

                //keyboard navigation
                // $(document).keyup(function (event) {
                //     if (event.which == '37' && elementInViewport(timeline.get(0))) {
                //         showNewContent(timelineComponents, timelineTotWidth, 'prev');
                //     } else if (event.which == '39' && elementInViewport(timeline.get(0))) {
                //         showNewContent(timelineComponents, timelineTotWidth, 'next');
                //     }
                // });
            });
        }

        function updateSlide(timelineComponents, timelineTotWidth, string) {
            //retrieve translateX value of timelineComponents['eventsWrapper']
            var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
                wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));

            (string == 'next') ?
                translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth) : translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
        }

        function showNewContent(timelineComponents, timelineTotWidth, string) {
            //go from one event to the next/previous one
            var visibleContent = timelineComponents['eventsContent'].find('.selected'),
                newContent = (string == 'next') ? visibleContent.next() : visibleContent.prev();

            if (newContent.length > 0) { //if there's a next/prev event - show it
                var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
                    newEvent = (string == 'next') ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');

                updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
                updateVisibleContent(newEvent, timelineComponents['eventsContent']);
                newEvent.addClass('selected');
                selectedDate.removeClass('selected');
                updateOlderEvents(newEvent);
                updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
            }
        }

        // function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
        //     //translate timeline to the left/right according to the position of the selected event
        //     var eventStyle = window.getComputedStyle(event.get(0), null),
        //         eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
        //         timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
        //         timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
        //     var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

        //     if ((string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' && eventLeft < - timelineTranslate)) {
        //         translateTimeline(timelineComponents, - eventLeft + timelineWidth / 2, timelineWidth - timelineTotWidth);
        //     }
        // }

        function translateTimeline(timelineComponents, value, totWidth) {
            var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
            value = (value > 0) ? 0 : value; //only negative translate value
            value = (!(typeof totWidth === 'undefined') && value < totWidth) ? totWidth : value; //do not translate more than timeline width
            setTransformValue(eventsWrapper, 'translateX', value + 'px');
            //update navigation arrows visibility
            (value == 0) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
            (value == totWidth) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
        }

        function updateFilling(selectedEvent, filling, totWidth) {
            //change .filling-line length according to the selected event
            var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
                eventLeft = eventStyle.getPropertyValue("left"),
                eventWidth = eventStyle.getPropertyValue("width");
            eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', '')) / 2;
            var scaleValue = eventLeft / totWidth;
            setTransformValue(filling.get(0), 'scaleX', scaleValue);
        }

        function setDatePosition(timelineComponents) {
            var distanceIncrement = 200; // Keep a fixed distance of 200px
            for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
                var leftPosition = i * distanceIncrement; // Fixed distance between each dot
                timelineComponents['timelineEvents'].eq(i).css('left', leftPosition + 'px');
            }
        }

        function setTimelineWidth(timelineComponents) {
            var numberOfEvents = timelineComponents['timelineDates'].length;
            var distanceIncrement = 200; // Fixed width of 200px between each dot

            // Calculate the total width by multiplying number of events by 200px
            var totalWidth = (numberOfEvents - 1) * distanceIncrement + 400; // Extra space at both ends
            timelineComponents['eventsWrapper'].css('width', totalWidth + 'px');

            updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'], totalWidth);

            return totalWidth;
        }

        function updateVisibleContent(event, eventsContent) {
            var eventDate = event.data('date'),
                visibleContent = eventsContent.find('.selected'),
                selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
                selectedContentHeight = selectedContent.height();

            if (selectedContent.index() > visibleContent.index()) {
                var classEnetering = 'selected enter-right',
                    classLeaving = 'leave-left';
            } else {
                var classEnetering = 'selected enter-left',
                    classLeaving = 'leave-right';
            }

            selectedContent.attr('class', classEnetering);
            visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                visibleContent.removeClass('leave-right leave-left');
                selectedContent.removeClass('enter-left enter-right');
            });
            eventsContent.css('height', selectedContentHeight + 'px');
        }

        function updateOlderEvents(event) {
            event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li').children('a').removeClass('older-event');
        }

        function getTranslateValue(timeline) {
            var timelineStyle = window.getComputedStyle(timeline.get(0), null),
                timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
                    timelineStyle.getPropertyValue("-moz-transform") ||
                    timelineStyle.getPropertyValue("-ms-transform") ||
                    timelineStyle.getPropertyValue("-o-transform") ||
                    timelineStyle.getPropertyValue("transform");

            if (timelineTranslate.indexOf('(') >= 0) {
                var timelineTranslate = timelineTranslate.split('(')[1];
                timelineTranslate = timelineTranslate.split(')')[0];
                timelineTranslate = timelineTranslate.split(',');
                var translateValue = timelineTranslate[4];
            } else {
                var translateValue = 0;
            }

            return Number(translateValue);
        }

        function setTransformValue(element, property, value) {
            element.style["-webkit-transform"] = property + "(" + value + ")";
            element.style["-moz-transform"] = property + "(" + value + ")";
            element.style["-ms-transform"] = property + "(" + value + ")";
            element.style["-o-transform"] = property + "(" + value + ")";
            element.style["transform"] = property + "(" + value + ")";
        }

        //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
        function parseDate(events) {
            var dateArrays = [];
            events.each(function () {
                var dateComp = $(this).data('date').split('/'),
                    newDate = new Date(dateComp[2], dateComp[1] - 1, dateComp[0]);
                dateArrays.push(newDate);
            });
            return dateArrays;
        }

        function parseDate2(events) {
            var dateArrays = [];
            events.each(function () {
                var singleDate = $(this),
                    dateComp = singleDate.data('date').split('T');
                if (dateComp.length > 1) { //both DD/MM/YEAR and time are provided
                    var dayComp = dateComp[0].split('/'),
                        timeComp = dateComp[1].split(':');
                } else if (dateComp[0].indexOf(':') >= 0) { //only time is provide
                    var dayComp = ["2000", "0", "0"],
                        timeComp = dateComp[0].split(':');
                } else { //only DD/MM/YEAR
                    var dayComp = dateComp[0].split('/'),
                        timeComp = ["0", "0"];
                }
                var newDate = new Date(dayComp[2], dayComp[1] - 1, dayComp[0], timeComp[0], timeComp[1]);
                dateArrays.push(newDate);
            });
            return dateArrays;
        }

        function daydiff(first, second) {
            return Math.round((second - first));
        }

        function minLapse(dates) {
            //determine the minimum distance among events
            var dateDistances = [];
            for (i = 1; i < dates.length; i++) {
                var distance = daydiff(dates[i - 1], dates[i]);
                dateDistances.push(distance);
            }
            return Math.min.apply(null, dateDistances);
        }

        /*
            How to tell if a DOM element is visible in the current viewport?
            http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        */
        function elementInViewport(el) {
            var top = el.offsetTop;
            var left = el.offsetLeft;
            var width = el.offsetWidth;
            var height = el.offsetHeight;

            while (el.offsetParent) {
                el = el.offsetParent;
                top += el.offsetTop;
                left += el.offsetLeft;
            }

            return (
                top < (window.pageYOffset + window.innerHeight) &&
                left < (window.pageXOffset + window.innerWidth) &&
                (top + height) > window.pageYOffset &&
                (left + width) > window.pageXOffset
            );
        }

        function checkMQ() {
            //check if mobile or desktop device
            return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const paragraphs = document.querySelectorAll('.about_para p');
        const toggleBtn = document.getElementById('toggleBtn');

        const visibleParagraphsCount = 3; // Number of paragraphs to show initially
        let isExpanded = false;

        // Hide all paragraphs after the specified count
        for (let i = visibleParagraphsCount; i < paragraphs.length; i++) {
            paragraphs[i].style.display = 'none';
        }

        toggleBtn.addEventListener('click', function () {
            if (isExpanded) {
                // Hide paragraphs beyond the visible count
                for (let i = visibleParagraphsCount; i < paragraphs.length; i++) {
                    paragraphs[i].style.display = 'none';
                }
                toggleBtn.innerHTML = 'Read More';
            } else {
                // Show all paragraphs
                for (let i = visibleParagraphsCount; i < paragraphs.length; i++) {
                    paragraphs[i].style.display = 'block';
                }
                toggleBtn.innerHTML = 'Read Less';
            }
            isExpanded = !isExpanded;
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var readMoreLinks = document.querySelectorAll('.read-more');
        readMoreLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                var moreText = this.previousElementSibling;
                if (moreText.style.display === 'none') {
                    moreText.style.display = 'inline';
                    this.textContent = ' Read Less';
                } else {
                    moreText.style.display = 'none';
                    this.textContent = ' Read More';
                }
            });
        });
    });
</script>