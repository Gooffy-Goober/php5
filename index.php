<?php
require_once './data/pagesData.php';
require_once './require/header.php';
?>

<section id="banner">
    <div class="banner">
        <div class="container">
            <div class="banner-content-text">
                <h2 class="title">Creative Digital Solutions</h2>

                <p>Proin iaculis purus consequat sem cure.</p>
            </div>
            <a class="banner-button button" href="/portfolio">View Portfolio</a>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">

        <div class="services-content-text">
            <h2 class="title">Professional Services</h2>
            <p>Proin iaculis purus consequat sem cure</p>
        </div>

        <div class="items-services">

            <?php if (!empty($arrServices)):
                foreach ($arrServices as $value):?>

                    <div class="item-services">
                        <div class="item_logo">
                            <img src="<?= $value['image'] ?>" alt="<?= $value['title'] ?>">
                        </div>
                        <div class="item-title title">
                            <h3><?= $value['title'] ?></h3>
                        </div>
                        <div class="item-text">
                            <p><?= $value['text'] ?></p>
                        </div>
                    </div>

                <?php endforeach;
            endif; ?>

        </div>
    </div>
</section>

<section id="just">
    <div class="justBanner">
        <div class="container">
            <div class="just-content">
                <div class="just-content-text">
                    <h2 class="title">Just Relax <span>&#38</span></h2>
                    <h2 class="title">Let us do the heavy lifting</h2>
                    <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus
                        posuere odio in tincidunt.</p>
                </div>

                <div class="items-just-content">
                    <div class="item-just-content">
                        <p><img src="img/check.png" alt="check">Initial Setup &#38 Customizations</p>
                    </div>
                    <div class="item-just-content">
                        <p><img src="img/check.png" alt="check">Regular Updates</p>
                    </div>
                    <div class="item-just-content">
                        <p><img src="img/check.png" alt="check">Round The Clock Support</p>
                    </div>
                </div>

                <a class="just-content-button button" href="/contact">Learn more</a>

            </div>
        </div>
    </div>
</section>

<section id="project">
    <div class="back-project">
        <img src="img/iPad.png" alt="ipad">
    </div>
    <div class="container">
        <div class="project-content-title">
            <h2 class="title">Latest Project</h2>
            <p>Proin iaculis purus consequat sem cure</p>
        </div>

        <div class="project-content">
            <div class="project-content-text">
                <h2 class="title">Developing A Framework</h2>

                <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit aenean rhoncus
                    posuere odio in tincidunt.</p>
            </div>
            <div class="items-just-content">

                <?php if (!empty($arrProject)):
                    foreach ($arrProject as $value): ?>

                        <div class="item-just-content">
                            <div class="item_logo">
                                <img src="<?= $value['image'] ?>" alt="<?= $value['title'] ?>">
                            </div>
                            <div class="item-text">
                                <h3><?= $value['title'] ?></h3>
                                <p><?= $value['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>

            <div class="project-content-foot">

                <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit aenean rhoncus
                    posuere odio in.</p>

                <a class="project-content-button" href="/portfolio">View Details &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once './require/contactInfo.php';
require_once './require/footer.php';
?>
