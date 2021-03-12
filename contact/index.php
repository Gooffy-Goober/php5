<?php
require_once '../data/pagesData.php';
require_once '../functions/checkForm.php';
require_once '../require/header.php';

$arErrors = checkForm();
?>
<?php if (count($arErrors) < 1 && isset($_REQUEST['name'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['message'])): require_once './positive.php'; else: ?>

    <div class="form_contact">
        <img class="contact_map" src="../img/Map%20Image.png" alt="">
        <section id="contact" class="container contact">
            <h2 class="title title-contact">Contact Us</h2>

            <form class="contact_form" action="/contact/" method="post">
                <div class="fieldscolumn">
                    <div class="field">

                        <?php if (array_key_exists('name', $arErrors)): ?>
                            <p class="error"> <?= $arErrors['name']; ?></p>
                        <?php endif; ?>

                        <input type="text" minlength="2" maxlength="50" placeholder="your name*" name="name" required value="<?= (array_key_exists('name', $arErrors) || !isset($_REQUEST['name'])) ? '' : $_REQUEST['name']; ?>">

                    </div>
                    <div class="field">

                        <?php if (array_key_exists('email', $arErrors)): ?>
                            <p class="error"> <?= $arErrors['email']; ?></p>
                        <?php endif; ?>

                        <input type="email" name="email" placeholder="your e-mail*" required value="<?= (array_key_exists('email', $arErrors) || !isset($_REQUEST['email'])) ? '' : $_REQUEST['email']; ?>">

                    </div>
                    <div class="field">

                        <?php if (array_key_exists('phone', $arErrors)): ?>
                            <p class="error"> <?= $arErrors['phone']; ?></p>
                        <?php endif; ?>

                        <input type="text" name="phone" placeholder="your phone" required value="<?= (array_key_exists('phone', $arErrors) || !isset($_REQUEST['phone'])) ? '' : $_REQUEST['phone']; ?>">

                    </div>
                </div>
                <div class="fieldscolumn">
                    <div class="field">

                        <?php if (array_key_exists('message', $arErrors)): ?>
                            <p class="error"> <?= $arErrors['message']; ?></p>
                        <?php endif; ?>

                        <textarea name="message" placeholder="your message*" required><?= (array_key_exists('message', $arErrors) || !isset($_REQUEST['message'])) ? '' : $_REQUEST['message']; ?></textarea>

                    </div>
                </div>

                <button class="button send" name="button" value="Send Message">Send Message</button>

            </form>
        </section>
    </div>


<?php endif; ?>

<?php
require_once '../require/contactInfo.php';
require_once '../require/footer.php';
?>