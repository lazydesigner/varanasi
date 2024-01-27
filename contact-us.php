<?php include './routes.php';
include './profiles-card.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Contact Us | Callgirlsinlucknow.in</title>
    <meta name="description" content="We are most trusted escort agency in Lucknow. Anyone can contact us for any detials, enquiry, grievances, etc. We revert back within 24 hours">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Us | Callgirlsinlucknow.in" />
    <meta property="og:description" content="We are most trusted escort agency in Lucknow. Anyone can contact us for any detials, enquiry, grievances, etc. We revert back within 24 hours" />
    <meta property="og:url" content="<?= get_url() ?>contact-us/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Us | Callgirlsinlucknow.in" />
    <meta name="twitter:description" content="We are most trusted escort agency in Lucknow. Anyone can contact us for any detials, enquiry, grievances, etc. We revert back within 24 hours" />
    <link rel="canonical" href="<?= get_url() ?>contact-us/" />
    <link rel="stylesheet" href="<?= get_url() ?>assets/css/contact.css">
    <?= $pages_css ?>
</head>

<body>
    <?php include './header.php' ?>
    <div class="content-container">
        <div class="page-container">
            <div class="main-content" style="width: 100%;">

                <h1 class="main-heading">Contact us</h1>
                <p>Our clients can contact us for any issue using our contact form. This contact form is not for any kind of booking or booking-related issues. You can contact us directly using the calling and WhatsApp features on our website.</p>
                <p>Brokers, Agents, Advertisers, Webmasters, or Independent Escorts can contact Ramanarora directly via email at ramanarora7869@gmail.com</p>


                Please do not use this form or the comment section for booking purposes.

                <div class="form-">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name<a>*</a></label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile No.<a>*</a></label>
                                <input type="text" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<a>*</a></label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message Or Comment<a>*</a></label><br>
                            <textarea name="" id="" cols="30" rows="15"></textarea>
                        </div>
                        <div class="form-group">
                            <button>Submit</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>


        <?php include './footer.php' ?>
    </div>
</body>

</html>