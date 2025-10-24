<?php
include 'db_connect.php';
session_start();

$questions = $_SESSION['questions'];
$answers = $_POST['answers'] ?? [];
$score = 0;

foreach ($answers as $qid => $selected) {
  $check = $conn->query("SELECT id FROM options WHERE question_id = $qid AND is_correct = 1");
  $correct = $check->fetch_assoc()['id'] ?? null;

  if ($selected == $correct) $score++;
}

$total = count($questions);
$percent = round(($score / $total) * 100);
$_SESSION['score'] = $score;
$_SESSION['percent'] = $percent;
$_SESSION['answers'] = $answers;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Results | Quiz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="result-container">
    <h2>🎉 Quiz Completed!</h2>
    <p>You scored <strong><?php echo $score; ?> / <?php echo $total; ?></strong></p>
    <p>Percentage: <strong><?php echo $percent; ?>%</strong></p>
    <a href="review.php" class="btn-start">Review Answers</a>
    <a href="index.php" class="btn-start">Restart Quiz</a>
  </div>
</body>
</html>
