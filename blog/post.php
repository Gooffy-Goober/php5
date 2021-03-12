<?php
if (!empty($_REQUEST['pid']) && !empty($arrPosts)):
    $post = $arrPosts[$_REQUEST['pid']]; ?>

    <div class="item-post-detail">
        <a class="project-content-button" href="/blog/">&larr; Go back </a>
        <h1><?= $post['title']; ?></h1>
        <div class="image"><img src="<?= $post['image']; ?>" alt="img"></div>
        <div class="text"><?= $post['text']; ?></div>
    </div>


<?php endif; ?>
