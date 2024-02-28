<?php include './routes.php';
include './profiles-card.php'; ?>
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
    <meta property="og:url" content="<?= get_url() ?>gallery/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Title of page" />
    <meta name="twitter:description" content="meta description" />
    <link rel="canonical" href="<?= get_url() ?>gallery/" />
    <?= $pages_css ?>

    <style>
        .gallery-image {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2%;
        }

        .images-section {
            margin: 1% 0;
            width: 30%;
            height: auto;
            border: 1px solid var(--NavbarColor);
            object-fit: cover;
            object-position: top;
        }
    </style>
</head>

<body>
    <?php include './header.php' ?>
    <div class="content-container">
        <div class="page-container">
            <div class="main-content" style="width: 100%;">
                <h1 class="main-heading">Gallery</h1>
                <div class="gallery-image">
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-1-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-2-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-2.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-3.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/hot-call-girls-in-dubai-971561616995-indian-call-girls-in-dubai.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-1-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-2-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-2.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-4-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-4.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-5.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-6.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-7.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/indian-call-girls-in-dubai-971561616995-hot-dubai-call-girls.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                </div>

            </div>
        </div>


        <?php include './footer.php' ?>
    </div>
</body>

</html>