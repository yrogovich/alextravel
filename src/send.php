<?php
$to = 'work-biznesrost24@yandex.by'; //Почта получателя, через запятую можно указать сколько угодно адресов
$subject = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form']; //Заголовок сообщения
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>';
        $message .= '<p>'.$_POST['form_name'].'</p>';
        $message .= '<p>'.$_POST['url'].'</p>';
        if(isset($_POST['user_first_name']) && $_POST['user_first_name'] !== '')
            $message .= '<h2>Личная информация</h2>';
        if(isset($_POST['user_first_name']) && $_POST['user_first_name'] !== '')
            $message .= '<p>Имя: '.$_POST['user_first_name'].'</p>';
        if(isset($_POST['user_last_name']) && $_POST['user_last_name'] !== '')
            $message .= '<p>Фамилия: '.$_POST['user_last_name'].'</p>';
        if(isset($_POST['user_phone']) && $_POST['user_phone'] !== '')
            $message .= '<p>Телефон: '.$_POST['user_phone'].'</p>';
        if(isset($_POST['user_email']) && $_POST['user_email'] !== '')
            $message .= '<p>Email: '.$_POST['user_email'].'</p>';
        if(isset($_POST['user_message']) && $_POST['user_message'] !== '')
            $message .= '<p>Сообщение: '.$_POST['user_message'].'</p>';
        if(isset($_POST['form_payment_method']) && $_POST['form_payment_method'] !== '')
            $message .= '<p>Метод оплаты: '.$_POST['form_payment_method'].'</p>';
$message .= '                 
            </body>
        </html>'; //Текст нащего сообщения можно использовать HTML теги
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: form@".$_SERVER['SERVER_NAME']."\r\n"; //Наименование и почта отправителя
mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
