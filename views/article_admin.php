<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Концепция MVC</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
			<div>
				<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
					<label>
						Заголовок статьи:<br>
						<input type="text" name="title" value="<?=$article['title']?>" class="form-item" required>
					</label><br>
					<label>
						Дата:<br>
						<input type="date" name="data" value="<?=$article['data']?>" class="form-item" required>
					</label><br>
					<label>
						Текст статьи:<br>
						<textarea class="form-item" name="content" required><?=$article['content']?></textarea>
					</label><br>
					<label>
						<input type="submit" value="Сохранить" class="btn">
					</label>
				</form>
			</div>
			<footer>
				<p>Концепция MVC<br>Copyright &copy; 2023</p>
			</footer>
	</div>
</body>
</html>