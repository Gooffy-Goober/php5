<footer>
    <div class="topFooter">
        <div class="container">
            <div class="contact">
                <h2 class="title title-foot">Contact us</h2>
                <div class="items-contact">
                    <?php if (!empty($arrContacts)):
                        foreach ($arrContacts as $value): ?>

                            <div class="item-contact">
                                <div class="item-contact-img">
                                    <img src="<?= $value['image'] ?>" alt="<?= $value['contact'] ?>">
                                </div>
                                <div class="item-contact-info">
                                    <?php if (!empty($value['action'])): ?>
                                        <a href="<?= $value['action'] ?>:<?= $value['contact'] ?>"><?= $value['contact'] ?></a>
                                    <?php else: ?>
                                        <span><?= $value['contact'] ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>

            <div class="posts">
                <h2 class="title title-foot">Latest Posts</h2>
                <div class="items-posts">
                    <?php if (!empty($arrPosts)):
                        $arRevPosts = array_reverse($arrPosts);
                        $count = 0;
                        foreach ($arRevPosts as $id => $value):
                            if ($count < 5): $count++; ?>
                                <div class="item-posts">
                                    <div class="item-posts-img">
                                        <img src="<?= $value['ico'] ?>" alt="Icon">
                                    </div>
                                    <div class="item-posts-text">

                                        <a href="/blog/?pid=<?= $id; ?>"><?= $value['title'] ?></a>
                                    </div>
                                </div>
                            <?php else: break;
                            endif;
                        endforeach;
                    endif; ?>
                </div>

            </div>

            <div class="tweets">
                <h2 class="title title-foot">Latest Tweets</h2>

                <div class="items-tweets">
                    <?php if (!empty($arrTweets)):
                        $arRevTweets = array_reverse($arrTweets);
                        $count = 0;
                        foreach ($arRevTweets as $value):
                            if ($count < 2): $count++; ?>
                                <div class="item-tweets">
                                    <div class="item-tweets-img">
                                        <img src="../img/Twitter_Icon.png" alt="Twitter">
                                    </div>

                                    <div class="item-tweets-text">
                                        <a href="<?= $value['href'] ?>" target="_blank"><?= $value['text'] ?></a>
                                        <div class="tags">
                                            <?php if (!empty($value['tags'])):
                                                foreach ($value['tags'] as $key => $tag): ?>
                                                    <a href="<?= $key ?>">&#35;<?= $tag ?></a>
                                                <?php endforeach;
                                            endif; ?>
                                        </div>
                                        <p><?= $value['time'] ?></p>
                                    </div>
                                </div>
                            <?php else: break;
                            endif;
                        endforeach;
                    endif; ?>

                </div>

            </div>
        </div>
    </div>

    <div class="bottomFooter container">
        <div class="copyright">
            <p>&#169; Copyright 2014 FreebiesXpress.com</p>
        </div>

        <div class="item-icon">
            <a class="ico ico-tw" href="#"></a>
            <a class="ico ico-fb" href="#"></a>
            <a class="ico ico-pin" href="#"></a>
            <a class="ico ico-goo" href="#"></a>
        </div>
    </div>
</footer>
</body>
</html>
