<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>PHP. Уровень 2</title>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="theme/style.css"/>
</head>
<body>
<h1>PHP. Уровень 2</h1>
<br/>
<a href="index.php">Главная</a> |
<a href="editor.php">Консоль редактора</a>
<hr/>
<h1>Новая статья</h1>
<? if ($error) : ?>
    <p><b style="color: red;">Заполните все поля!</b></p>
<? endif ?>
<? if ($NotDate == true) :?>
    <p><b style="color: red;">Все поля заполнены!</b></p>
<? else :  ?>
    <p><b style="color: red;">Нехватает данных!</b></p>
<? endif ?>
<form method="post">
    Название:
    <br/>
    <input type="text" name="title" value="<?= $title ?>"/>
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content"><?= $content ?></textarea>
    <br/>
    <input type="submit" value="Изенить"/>
</form>
<hr/>
</body>
</html>
