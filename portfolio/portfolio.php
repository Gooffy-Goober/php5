<?php
if (!empty($_REQUEST['pid']) && !empty($arrPortfolio)):
    $post = $arrPortfolio[$_REQUEST['pid']]; ?>

    <div class="item-portfolio-detail">
        <a class="project-content-button" href="/portfolio/">&larr; Go back </a>
        <div class="item_logo">
            <img src="<?= $post['image']; ?>" alt="img">
        </div>
        <div class="item-title">
            <h1><?= $post['title']; ?></h1>
        </div>
        <div class="item-text">
            <div><?= $post['text']; ?></div>
        </div>
    </div>

<?php endif; ?>