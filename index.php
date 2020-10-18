<?php include 'database.php'; ?>
<?php
	//Get Total Questions
	$query ="SELECT * FROM `questions`";
	//Get results
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
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
			<h2>Test Your Tech Knowledge</h2>
			<p>This is a multiple choice quiz to test your technology knowledge</p>
			<ul>
				<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start" name="start_quiz" <?php if($total == 0) {?> style="display: none" <?php } ?>>Start Quiz</a> 
			<a href="deleteAll.php" class="start" style="float: right"><b>Delete Records🗑️</b></a>
			<center><a href="add.php" class="start"><b>+</b> Question</a></center> 
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2020, Tech Quizzer 
		</div>
	</footer>
</body>
</html>