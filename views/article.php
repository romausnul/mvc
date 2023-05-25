<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Блог о серваках</title>
</head>
<body>
    <div class="container">
        <h1>Сервера для чайников</h1>
        <div>
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Опубликовано: <?=$article['data']?></em>
                <p><?=$article['content']?></p>
            </div>
        </div>
        <footer>
           
        </footer>
    </div>
</body>
</html>