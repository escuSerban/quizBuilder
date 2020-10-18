<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<link href="CSS/style.css" rel="stylesheet" type="text/css" />
	<head>
	<meta charset="utf-8 />
	<title>Tech Quizzer</title>
</head>
<body>
	<header>
		<div class="container">
			<h1>Tech Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
			<p>Congrats! You have completed the test</p>
			<p>Final Score: <?php echo $_SESSION['score']; ?></p>
			<a href="question.php?n=1" class="start">Take Again</a>
			<center><a href="index.php" class="start">Home Page</a></center>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2020, Tech Quizzer 
		</div>
	</footer>
</body>
</html>
<?php session_destroy(); ?>