<?php include './routes.php';
include './profiles-card.php';

$admin = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.841 15.659L18.017 15.836L18.1945 15.659C19.0732 14.7803 20.4978 14.7803 21.3765 15.659C22.2552 16.5377 22.2552 17.9623 21.3765 18.841L18.0178 22.1997L14.659 18.841C13.7803 17.9623 13.7803 16.5377 14.659 15.659C15.5377 14.7803 16.9623 14.7803 17.841 15.659ZM12 14V16C8.68629 16 6 18.6863 6 22H4C4 17.6651 7.44784 14.1355 11.7508 14.0038L12 14ZM12 1C15.315 1 18 3.685 18 7C18 10.2397 15.4357 12.8776 12.225 12.9959L12 13C8.685 13 6 10.315 6 7C6 3.76034 8.56434 1.12237 11.775 1.00414L12 1ZM12 3C9.78957 3 8 4.78957 8 7C8 9.21043 9.78957 11 12 11C14.2104 11 16 9.21043 16 7C16 4.78957 14.2104 3 12 3Z"></path></svg>';

$user = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.38938 16.5386C5.33894 15.0901 4 12.7014 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 12.7014 18.6611 15.0901 16.6106 16.5386L18.6936 21.2996C18.8043 21.5526 18.6889 21.8474 18.4359 21.9581C18.3727 21.9857 18.3045 22 18.2355 22H5.76451C5.48837 22 5.26451 21.7761 5.26451 21.5C5.26451 21.431 5.27878 21.3628 5.30643 21.2996L7.38938 16.5386ZM8.11851 10.9704C8.55217 12.7106 10.1255 14 12 14C13.8745 14 15.4478 12.7106 15.8815 10.9704L13.9407 10.4852C13.7239 11.3553 12.9372 12 12 12C11.0628 12 10.2761 11.3553 10.0593 10.4852L8.11851 10.9704Z"></path></svg>';

$empty_star = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z"></path></svg>';

$filled_star = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path></svg>';

$half_star = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502V15.968ZM12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path></svg>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Title of page</title>
    <meta name="description" content="meta description">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Title of page" />
    <meta property="og:description" content="meta description" />
    <meta property="og:url" content="<?= get_url() ?>agonda-escorts/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Title of page" />
    <meta name="twitter:description" content="meta description" />
    <link rel="canonical" href="<?= get_url() ?>agonda-escorts/" />
    <link rel="stylesheet" href="<?= get_url() ?>assets/css/reviews.css">
    <?= $pages_css ?>
</head>

<body>
    <?php include './header.php' ?>
    <div class="content-container">
        <div class="page-container">
            <div class="main-content" style="width: 100%;">
                <h1 class="main-heading">Give us your valuable Feedback or Rating</h1>

                <p>Please leave a 5 Star Rating for us. We will be happy to serve best call girls in Lucknow again. You can mention escort name in comment section for specific review. We never contact on mentioned email address but it is mandatory to provide to submit the review form.</p>

                <p>This is not support form. If you have any grievances then please contact to the admin on given mobile number or you can contact using&nbsp;<a href="https://callgirlsinlucknow.in/contact-us/">contact form</a>.</p>

                <p>We are not responsible for any monetary issue. We encourage hand to hand payment. Brokers and clients are responsible for their individual deals.</p>


                <div class="review-form">
                    <div class="review-st"><b>4.3</b> <?=$filled_star ?><?=$filled_star ?><?=$filled_star ?><?=$filled_star ?><?=$half_star ?></div>
                    <p><b>4.3</b> out of 5 Stars(Based on 42 reviews)</p>

                    <div class="review-chart">
                        <div class="review-progress">
                            <p>Excellent</p>
                            <div class="progress">
                                <div style="width: 65%;" class="progress-bar"></div>
                            </div>
                            <p>68%</p>
                        </div>
                        <div class="review-progress">
                            <p>Very Good</p>
                            <div class="progress">
                                <div style="width:14%" class="progress-bar"></div>
                            </div>
                            <p>14%</p>
                        </div>
                        <div class="review-progress">
                            <p>Average</p>
                            <div class="progress">
                                <div style="width:8%" class="progress-bar"></div>
                            </div>
                            <p>8%</p>
                        </div>
                        <div class="review-progress">
                            <p>Poor</p>
                            <div class="progress">
                                <div style="width:8%" class="progress-bar"></div>
                            </div>
                            <p>8%</p>
                        </div>
                        <div class="review-progress">
                            <p>Terrible</p>
                            <div class="progress">
                                <div style="width:2%" class="progress-bar"></div>
                            </div>
                            <p>2%</p>
                        </div>
                    </div>

                </div>


                <div class="review-box">
                    <div class="review-body">
                        <div class="review-row">
                            <div class="review-image">
                                <?= $user ?>
                            </div>
                            <div class="review-info">
                                <strong>Damanjeet singh</strong>
                                <div class="star">
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                </div>
                                <small>12/1/2024</small>
                            </div>
                        </div>
                        <a href="https://varanasi.callgirlsinlucknow.in/">https://varanasi.callgirlsinlucknow.in/</a>
                        <p>Awesome Service provided by raman escort at every reasonable price. They provided the same girl as they Send me on whatsapp and delivered it to my desired place at NOVOTEL HOTEL.Thanks for making my night memorable..</p>
                        <div class="review-reply">
                            <div class="review-row">
                                <div class="review-image">
                                    <?= $admin ?>
                                </div>
                                <div class="review-info">
                                    <strong>Callgirlsinlucknow.in</strong><br>
                                    <small>12/1/2024</small>
                                </div>
                            </div>
                            <p>Thank you for your review! We're happy to have met your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-body">
                        <div class="review-row">
                            <div class="review-image">
                                <?= $user ?>
                            </div>
                            <div class="review-info">
                                <strong>Aryan P</strong>
                                <div class="star">
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $half_star ?>
                                </div>
                                <small>31/12/2023</small>
                            </div>
                        </div>
                        <a href="https://varanasi.callgirlsinlucknow.in/">https://varanasi.callgirlsinlucknow.in/</a>
                        <p>Try it once, you will never forget again. Recommended Service if you are looking for a sex partner.</p>
                        <div class="review-reply">
                            <div class="review-row">
                                <div class="review-image">
                                    <?= $admin ?>
                                </div>
                                <div class="review-info">
                                    <strong>Callgirlsinlucknow.in</strong><br>
                                    <small>31/12/2023</small>
                                </div>
                            </div>
                            <p>Thank you for choosing our service! We're thrilled to hear you had a positive experience.</p>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-body">
                        <div class="review-row">
                            <div class="review-image">
                                <?= $user ?>
                            </div>
                            <div class="review-info">
                                <strong>Akash kumar</strong>
                                <div class="star">
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $empty_star ?>
                                </div>
                                <small>25/8/2023</small>
                            </div>
                        </div>
                        <a href="https://varanasi.callgirlsinlucknow.in">https://varanasi.callgirlsinlucknow.in</a>
                        <p>Can't forget the last night with the girl, awesome awesome . Great service </p>
                        <div class="review-reply">
                            <div class="review-row">
                                <div class="review-image">
                                    <?= $admin ?>
                                </div>
                                <div class="review-info">
                                    <strong>Callgirlsinlucknow.in</strong><br>
                                    <small>25/8/2024</small>
                                </div>
                            </div>
                            <p>Your words made our day! Thank you for choosing our service.</p>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-body">
                        <div class="review-row">
                            <div class="review-image">
                                <?= $user ?>
                            </div>
                            <div class="review-info">
                                <strong>Neeraj</strong>
                                <div class="star">
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                </div>
                                <small>13/8/2023</small>
                            </div>
                        </div>
                        <a href="https://varanasi.callgirlsinlucknow.in/">https://varanasi.callgirlsinlucknow.in/</a>
                        <p>Thanks for Making my night memorable...
                            I will never go anywhere else to get a escort service.
                            Thanks again!.</p>
                        <div class="review-reply">
                            <div class="review-row">
                                <div class="review-image">
                                    <?= $admin ?>
                                </div>
                                <div class="review-info">
                                    <strong>Callgirlsinlucknow.in</strong><br>
                                    <small>13/8/2023</small>
                                </div>
                            </div>
                            <p>We appreciate your feedback! It's great to know we could meet your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-body">
                        <div class="review-row">
                            <div class="review-image">
                                <?= $user ?>
                            </div>
                            <div class="review-info">
                                <strong>Tushar</strong>
                                <div class="star">
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $filled_star ?>
                                    <?= $empty_star ?>
                                </div>
                                <small>2/8/2023</small>
                            </div>
                        </div>
                        <a href="https://varanasi.callgirlsinlucknow.in/">https://varanasi.callgirlsinlucknow.in/</a>
                        <p>
                            The girl was as per the description,she was very Awesome and Sexy.
                        </p>
                        <div class="review-reply">
                            <div class="review-row">
                                <div class="review-image">
                                    <?= $admin ?>
                                </div>
                                <div class="review-info">
                                    <strong>Callgirlsinlucknow.in</strong><br>
                                    <small>3/8/2023</small>
                                </div>
                            </div>
                            <p>We're glad to have been of service! Your feedback is invaluable to us.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <?php include './footer.php' ?>
    </div>
</body>

</html>