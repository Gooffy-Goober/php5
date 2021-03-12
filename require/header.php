<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/media.css">

</head>
<body>

<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="/"><img src="../img/Logo.png" alt="logo"></a>
            </div>

            <input id="menu_check" type="checkbox">
            <label for="menu_check" class="menu_label"><span></span></label>

            <ul class="navigation_item">
                <?php if (!empty($arMenu)):
                    foreach ($arMenu as $key => $value): ?>
                        <li><a href="/<?= $key ?>"><?= $value ?></a></li>
                    <?php endforeach;
                endif; ?>
            </ul>

        </div>
    </div>
</header>