<?php
require_once '../data/pagesData.php';
require_once '../require/header.php';
?>
<div class="container">
    <?php if (empty($_REQUEST['pid'])): ?>
        <h1 class="blogTitle title">Our Blog</h1>
        <div class="postList">
            <?php if (!empty($arrPosts)):
                foreach ($arrPosts as $id => $post): ?>
                    <div class="item-post">
                        <h3><a href="/blog/?pid=<?= $id; ?>"><?= $post['title']; ?></a></h3>
                        <div class="image"><a href="/blog/?pid=<?= $id; ?>"><img src="<?= $post['image']; ?>" alt="img"></a>
                        </div>
                    </div>

                <?php endforeach;
            endif; ?>
        </div>
    <?php else:
        require_once './post.php';
    endif; ?>

</div>
<?php
require_once '../require/contactInfo.php';
require_once '../require/footer.php';
?>
