<?php
include 'class/News.php';
include 'class/Comments.php';

$news[0] = new News(
    '0',
    '26.11.2016',
    'Американские СМИ попались на утку про порно в эфире CNN',
    '<a href="https://meduza.io/news/2016/11/26/amerikanskie-smi-popalis-na-utku-pro-porno-v-efire-cnn">meduza.io</a>',
    '<p>Крупнейшие СМИ опубликовали 25&nbsp;ноября сообщения, что в&nbsp;эфире телеканала CNN вместо программы о&nbsp;путешествиях показали 30-минутный порнофильм.</p>
<p>Публикации об&nbsp;этом появились на&nbsp;сайтах <a href="http://www.foxnews.com/entertainment/2016/11/25/porn-accidentally-airs-istead-cnn-in-boston-for-30-minutes.html" target="_blank">Fox News</a>, <a href="http://nypost.com/2016/11/25/cnn-accidentally-airs-transsexual-porn-on-thanksgiving/" target="_blank">The New York Post</a>, <a href="http://variety.com/2016/tv/news/cnn-porn-boston-rcn-cable-operator-1201926702/" target="_blank">Variety</a>, <a href="http://thenextweb.com/shareables/2016/11/25/cnn-hardcore-porn/" target="_blank">The Next Web</a> и&nbsp;других изданий. Кроме того, новость о&nbsp;порно в&nbsp;эфире CNN <a href="http://www.independent.co.uk/arts-entertainment/tv/news/cnn-accidentally-airs-30-minutes-of-non-stop-hardcore-porn-a7439371.html" target="_blank">опубликовала</a> британская The Independent.</p>
<p>Все публикации основывались на&nbsp;твите пользователя <a href="https://twitter.com/solikearose" target="_blank">@solikearose</a>&nbsp;(впоследствии он&nbsp;закрыл свой аккаунт). Как пишет USA Today, не&nbsp;исключено, что CNN решил подыграть пользователю и&nbsp;подтвердил ошибку в&nbsp;эфире.</p>
<p>Большинство изданий отредактировали свои сообщения, когда стало понятно, что твит оказался уткой. Как пишет USA Today, эта история наглядно демонстрирует механизм распространения фейковых новостей, о&nbsp;которых много говорят после президентских выборов в&nbsp;США.</p>
');

$news[1] = new News(
    '1',
    '26.11.2016',
    'Британцы, недовольные «Брекзитом», смогут купить паспорта ЕС',
    '<a href="https://meduza.io/news/2016/11/26/britantsy-nedovolnye-brekzitom-smogut-kupit-pasporta-es">meduza.io</a>',
    '<p>Граждане Великобритании, желающие после выхода страны из&nbsp;ЕС&nbsp;сохранить гражданство Евросоюза, смогут сделать это за&nbsp;деньги. Об&nbsp;этом пишет The Times со&nbsp;ссылкой на&nbsp;заявление Ги&nbsp;Верхофстадта&nbsp;— бельгийского политика, отвечающего за&nbsp;переговоры о&nbsp;«Брекзите» со&nbsp;стороны Брюсселя.</p>
<p>По&nbsp;словам Верхофстадта, речь идет о&nbsp;том, чтобы желающие могли по-прежнему пользоваться льготами, которое дает гражданство ЕС, в&nbsp;обмен на&nbsp;ежегодный денежный взнос.&nbsp;</p>
<p>Граждане Великобритании, получившие паспорта ЕС&nbsp;после «Брекзита», смогут свободно перемещаться по&nbsp;территории Евросоюза, проживать на&nbsp;его территории и&nbsp;голосовать на&nbsp;выборах в&nbsp;структуры блока.&nbsp;</p>
<p>По&nbsp;словам члена Европейского парламента из&nbsp;Люксембурга Шарля Горенса, британцы могут получить паспорта и&nbsp;бесплатно. Голосование по&nbsp;этому вопросу пройдет 8&nbsp;декабря.</p>
');

$news[2] = new News(
    '2',
    '26.11.2016',
    'Люди пожертвовали десятки тысяч долларов на рытье бессмысленной дыры в земле',
    '<a href="https://meduza.io/shapito/2016/11/26/ot-zabora-i-do-obeda">meduza.io</a>',
    '<div>
<p>Компания Cards Against Humanity, выпускающая игральные карты для вечеринок, решила отметить «черную пятницу» (начало сезона праздничных распродаж США), вырыв гигантскую яму.</p>
<p>К&nbsp;выкапыванию ямы может подключиться любой желающий&nbsp;— для этого на&nbsp;сайте Cards Against Humanity ведется кампания по&nbsp;сбору средств под названием «Помоги рыть яму». Каждое пожертвование продлевает время рытья ямы на&nbsp;три секунды. Cards Against Humanity обещает рыть яму до&nbsp;тех пор, пока пожертвования не&nbsp;закончатся.</p>
');

$comments[0][0] = new Comment('26.11.2016', 'Вася', '<p>Круто!</p>');
$comments[1][0] = new Comment('26.11.2016', 'WhiteRabbit001', '<p>Хахаха!</p>');
$comments[1][1] = new Comment('26.11.2016', 'Jason', '<p>Ну вообще...</p>');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <style>
        table {
            width: 50%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
    </style>
</head>
<body>
<? $news[0]->showNews($comments) ?>
<? $news[1]->showNews($comments) ?>
<? $news[2]->showNews($comments); ?>
</body>
</html>
