<?php

require_once("database.php");
require_once("models/articles.php");

$link = db_connect();
$article = articles_get($link, $_GET['id']);

include("views/article.php");

?>
<a href="https://ibb.co/pKPMqyK"><img src="https://i.ibb.co/6tZTQBt/image.png" alt="image" border="0"></a>