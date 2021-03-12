<?php
require_once '../data/pagesData.php';
require_once '../require/header.php';
?>
<div class="container">

    <?php if (empty($_REQUEST['pid'])): ?>
        <h1 class="portTitle title">Our Portfolio</h1>
        <div class="portfolio"></div>
        <div class="items-portfolio">
            <?php if (!empty($arrPortfolio)):
                foreach ($arrPortfolio as $id => $post): ?>
                    <div class="item-portfolio">
                        <div class="item_logo">
                            <a href="/portfolio/?pid=<?= $id; ?>"><img src="<?= $post['image']; ?>" alt="img"></a>
                        </div>
                        <div class=\"item-title\">
                            <h3><a href="/portfolio/?pid=<?= $id; ?>"><?= $post['title']; ?></a></h3>
                        </div>
                    </div>

                <?php endforeach;
            endif; ?>
        </div>
    <?php else:
        require_once './portfolio.php';
    endif; ?>
</div>
</div>

<?php
require_once '../require/contactInfo.php';
require_once '../require/footer.php';
?>
