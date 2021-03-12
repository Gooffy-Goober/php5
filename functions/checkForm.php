<?php

function checkForm()
{

    $arErrors = [];

    $patternNumber = '/^(\+375|80)(\(\d{2}\)|\d{2})\d{7}$/';
    $patternEmail = '/^[A-Za-z]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+@[A-Za-z0-9]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+\.[A-Za-z]{2,11}$/';
    $patternName = '/^[а-яА-ЯёЁ]+$/u ';

    if (isset($_REQUEST['name'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['message'])) {

        (preg_match($patternName, $_REQUEST['name']) == 1) ?: $arErrors['name'] = 'Проверьте введенное имя';
        (preg_match($patternNumber, $_REQUEST['phone']) == 1) ?: $arErrors['phone'] = 'Проверьте номер телефона';
        (preg_match($patternEmail, $_REQUEST['email']) == 1) ?: $arErrors['email'] = 'Проверьте введенный email';
        $_REQUEST['message'] = strip_tags($_REQUEST['message']);
        (strlen($_REQUEST['message']) >= 5 && strlen($_REQUEST['message']) <= 250) ?: $arErrors['message'] = 'Проверьте размер сообщения (более 5 и менее 250 символов)';

    }
    return $arErrors;
}

;