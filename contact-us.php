<?php include('header.php'); ?>

<?php
global $connF;
$getContactSql = "SELECT * FROM contactus WHERE 1";
$getContact = mysqli_query($connF, $getContactSql);
$getContactRow = mysqli_fetch_array($getContact);
$contactId = $getContactRow['contactId'];
$contactAddress = $getContactRow['contactAddress'];
$contactEmail_1 = $getContactRow['contactEmail_1'];
$contactEmail_2 = $getContactRow['contactEmail_2'];
$contactEmail_3 = $getContactRow['contactEmail_3'];
$contactNum_1 = $getContactRow['contactNum_1'];
$contactNum_2 = $getContactRow['contactNum_2'];
$contactNum_3 = $getContactRow['contactNum_3'];
?>


<section class="contact-banner position-relative">
    <img src="https://touchwoodbliss.com/images/villa-slide/tent-view.jpg" class="img-fluid w-100 object-fit-cover"
        alt="">

    <h1 class="contact_text position-absolute">
        <span class="connect">Connect</span>
        <span class="withus">with us</span>
    </h1>
</section>





<section class="contact_detail pt-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="my-4 py-2">
                            <div class="phone d-flex flex-row align-items-center gap-4">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <img src="images/phone.png" class="img-fluid icon-sm" alt="">
                                </div>
                                <div class="contact-info">
                                    <h6 class="text-dark">Phone Number</h6>
                                    <span class="contact-content pt-2"><a href="tel:<?php echo $contactNum_1;?>"><?php echo $contactNum_1;?></a>/<a href="tel:<?php echo $contactNum_2;?>"><?php echo $contactNum_2;?></a><a href="tel:<?php echo $contactNum_3;?>"><?php echo $contactNum_3;?></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 py-2">
                            <div class="phone d-flex flex-row align-items-center gap-4 pt-5">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <img src="images/email.png" class="img-fluid icon-sm" alt="">
                                </div>
                                <div class="contact-info">
                                    <h6 class="text-dark">E-mail Address</h6>
                                    <span class="contact-content pt-2">
                                        <a href="mailto:<?php echo $contactEmail_1;?>"><?php echo $contactEmail_1;?></a>
                                        <a href="mailto:<?php echo $contactEmail_2;?>"><?php echo $contactEmail_2;?></a>
                                        <a href="mailto:<?php echo $contactEmail_3;?>"><?php echo $contactEmail_3;?></a>
                                
                                
                                
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 py-2">
                            <div class="phone d-flex flex-row align-items-center gap-4 pt-5">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <img src="images/phone.png" class="img-fluid icon-sm" alt="">
                                </div>
                                <div class="contact-info">
                                    <h6 class="text-dark">Website</h6>
                                    <span class="contact-content pt-2">www.loremipsum.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 py-2">
                            <div class="phone d-flex flex-row align-items-center gap-4 pt-5">
                                <div class="contact-icon d-flex justify-content-center align-items-center flex-shrink-0">
                                    <img src="images/phone.png" class="img-fluid icon-sm" alt="">
                                </div>
                                <div class="contact-info">
                                    <h6 class="text-dark">Address</h6>
                                    <div class="pt-2">
                                    <p class="contact-content"><?php echo strip_tags($contactAddress); ?></p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="contact_form">
                            <h2 class="text-dark">Lorem ipsum dolor sit.</h2>
                            <form action="">
                                <div class="mt-3 py-2">
                                    <input type="text" class="input-control" placeholder="Enter Name">
                                </div>
                                <div class="mt-3 py-2">
                                    <input type="email" class="input-control" placeholder="Enter Email">
                                </div>
                                <div class="mt-3 py-2">
                                    <input type="tel" class="input-control" placeholder="Enter phone">
                                </div>
                                <div class="mt-3 py-2">
                                    <textarea name="" rows="6" class="textarea-control" placeholder="Message"></textarea>
                                </div>
                                <div class="text-end mt-4">
                                    <button class="btn contactformbtn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="contact_service_banner d-flex align-items-center position-relative">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row ">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-7">
                        <h2 class="service_head">Consult the services you <span>need now!</span> </h2>
                        <p class="service_content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam
                            pariatur totam eum distinctio, nihil perspiciatis?</p>
                        <div class="row mt-4">
                            <div class="col-lg-4 mainservice">
                                <h5 class="d-flex flex-row align-items-center gap-3 text-white"><i
                                        class="fas fa-circle"></i> Fast delivery</h5>
                            </div>
                            <div class="col-lg-4 mainservice">
                                <h5 class="d-flex flex-row align-items-center gap-3 text-white"><i
                                        class="fas fa-circle"></i>Competetive Price</h5>
                            </div>
                            <div class="col-lg-4 mainservice">
                                <h5 class="d-flex flex-row align-items-center gap-3 text-white"><i
                                        class="fas fa-circle"></i> Wide Delivery Area</h5>
                            </div>
                            <div class="mt-4 pt-3">
                                <button class="btn contactformbtn">Contact us</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_map mt-5 pt-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1114.7093381106793!2d73.78325881519513!3d19.990865261683343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb056685fd97%3A0x4fed9f5498702fb!2sSilver%20Heights%20Apartment%2C%20Gurudwara%20Road%2C%20Shingada%20Talav%2C%20Mumbai%20Naka%2C%20Renuka%20Nagar%2C%20Nashik%2C%20Maharashtra%20422011!5e0!3m2!1sen!2sin!4v1729070726121!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include('footer.php'); ?>