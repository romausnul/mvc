<a href="https://cloudfile.mamon.host/mvc/logo.png"><img src="https://i.ibb.co/QnknKnk/image.png" alt="image" border="2"></a>
<?php
require_once("database.php");
require_once("models/articles.php");

$link = db_connect();
$articles = articles_all($link);

include("views/articles.php");

?>

 
 <div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>О НАС <span></span></h4>
					<p>МЫ СОЗДАЛИ ФОРУМ ДЛЯ ВАС САС <span>МЫ ВАС КСТА ЛЮБИМ И НЕ ПЕРЕДАЁМ ВАШИ ДАННЫЕ ПОЧТИ НИКОМУ</span></p>
				</div>
				
				<div class="col-md-4 agile-footer-grid">
					<h4>ФОТО </h4>
					<a href="https://ibb.co/0n0wY7R"><img src="https://i.ibb.co/0n0wY7R/image.png" alt="image" border="0"></a> 
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<p>© Mamon Dev | Design by <a href="forum/user/mamon">Mamon Dev</a></p>
		</div>
	</div>