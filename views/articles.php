<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Все о серваках</title>
</head>
<body>
    <div class="container">
        <h1>Сервера для чайников</h1>
        <a href="admin">Вход в админ-панель</a>
        <div>
        <?php foreach ($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>Опубликовано: <?=$a['data']?></em>
                <p><?=articles_intro($a['content'])?></p>
            </div>
        <?php endforeach ?>
        </div>
        <footer>
 
        </footer>
    </div>
</body>
</html>