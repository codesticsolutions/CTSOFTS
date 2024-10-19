<?php
include("header.php");
?>
<body>
<div class="page-wrapper">

<div class="preloader"></div>

<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>

<section class="contact-details">
    <div class="container ">
        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-md-60">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need Assistance?</span>
                        <h2>We’re Here to Help</h2>
                        <div class="text">Feel free to reach out for any questions, suggestions, or support. Our team is always available to provide the best assistance possible. We’re just a call or email away!</div>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="tel:980089850"><span>Free</span> +1 203 805 7525</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Email Us</h6>
                                <a href="mailto:info@example.com"> info@ctsofts.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Our Location</h6>
                                <span>11 Apex Dr Marlborough , MA 01752</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd" width="100%" height="550" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Connect With Us</span>
            <h2 class="section-title__title">Reach Out to Our Technology Experts</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form id="contact_form" name="contact_form" class action="https://html.kodesolution.com/2024/binso-html/includes/sendmail.php" method="post">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_name" class="form-control required" type="text" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Your Phone">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <input name="form_botcheck" class="form-control" type="hidden" value />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send Message</span></button>
                        <button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>
<script>
    (function($) {
        $("#contact_form").validate({
            submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                        if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                });
            }
        });
    })(jQuery);
</script>
</body>

<!-- Mirrored from html.kodesolution.com/2024/binso-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 09:33:45 GMT -->
</html>
